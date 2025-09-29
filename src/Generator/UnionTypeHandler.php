<?php

namespace Milly\Laragram\Generator;

/**
 * Handles union types (any_of) generation
 * Single Responsibility: Only handles union type logic
 */
class UnionTypeHandler
{
    public function generateConstructor(array $object): string
    {
        if ($object['name'] === 'MaybeInaccessibleMessage') {
            return $this->generateMaybeInaccessibleMessageConstructor();
        }
        
        return $this->generateGenericUnionConstructor($object);
    }

    public function generateProperties(array $object): string
    {
        if ($object['name'] === 'MaybeInaccessibleMessage') {
            return "    public ?Message \$message = null;\n    public ?InaccessibleMessage \$inaccessibleMessage = null;\n    public string \$type;\n\n";
        }
        
        return $this->generateGenericUnionProperties($object);
    }

    private function generateMaybeInaccessibleMessageConstructor(): string
    {
        return "    public function __construct(\$data)
    {
        // Determine which type this data represents based on available fields
        // InaccessibleMessage has a very specific structure: only message_id, chat, and date (always 0)
        // Message has many more fields and is more complex
        
        if (isset(\$data['date']) && \$data['date'] === 0 && 
            isset(\$data['message_id']) && isset(\$data['chat']) &&
            !isset(\$data['text']) && !isset(\$data['caption']) && 
            !isset(\$data['photo']) && !isset(\$data['document']) && 
            !isset(\$data['audio']) && !isset(\$data['video']) && 
            !isset(\$data['voice']) && !isset(\$data['video_note']) && 
            !isset(\$data['contact']) && !isset(\$data['location']) && 
            !isset(\$data['venue']) && !isset(\$data['poll']) && 
            !isset(\$data['dice']) && !isset(\$data['game']) && 
            !isset(\$data['invoice']) && !isset(\$data['successful_payment']) && 
            !isset(\$data['animation']) && !isset(\$data['sticker']) && 
            !isset(\$data['story']) && !isset(\$data['video_chat_started']) && 
            !isset(\$data['video_chat_ended']) && !isset(\$data['video_chat_participants_invited']) && 
            !isset(\$data['web_app_data']) && !isset(\$data['reply_markup']) && 
            !isset(\$data['entities']) && !isset(\$data['forward_origin']) && 
            !isset(\$data['reply_to_message']) && !isset(\$data['via_bot']) && 
            !isset(\$data['edit_date']) && !isset(\$data['has_protected_content']) && 
            !isset(\$data['media_group_id']) && !isset(\$data['author_signature']) && 
            !isset(\$data['proximity_alert_triggered']) && !isset(\$data['message_auto_delete_timer_changed']) && 
            !isset(\$data['is_topic_message']) && !isset(\$data['forum_topic_created']) && 
            !isset(\$data['forum_topic_edited']) && !isset(\$data['forum_topic_closed']) && 
            !isset(\$data['forum_topic_reopened']) && !isset(\$data['general_forum_topic_hidden']) && 
            !isset(\$data['general_forum_topic_unhidden']) && !isset(\$data['giveaway_created']) && 
            !isset(\$data['giveaway']) && !isset(\$data['giveaway_winners']) && 
            !isset(\$data['giveaway_completed']) && !isset(\$data['video_chat_scheduled']) && 
            !isset(\$data['message_effect']) && !isset(\$data['sender_boost_count']) && 
            !isset(\$data['sender_business_bot']) && !isset(\$data['business_connection_id'])) {
            // This looks like an InaccessibleMessage (only has chat, message_id, date=0)
            \$this->inaccessibleMessage = new InaccessibleMessage(\$data);
            \$this->type = 'InaccessibleMessage';
        } else {
            // This looks like a regular Message
            \$this->message = new Message(\$data);
            \$this->type = 'Message';
        }
    }";
    }

    private function generateGenericUnionConstructor(array $object): string
    {
        $functions = "    public function __construct(\$data)
    {
        // Try to instantiate each possible type and see which one works
        \$errors = [];
        \$successfulType = null;
        \$successfulObject = null;
        
        ";

        $typeChecks = "";
        
        foreach ($object['any_of'] as $index => $type) {
            $typeName = $type['reference'];
            $propertyName = lcfirst($typeName);
            
            $typeChecks .= "        // Try to create ".$typeName."\n";
            $typeChecks .= "        try {\n";
            $typeChecks .= "            \$".$propertyName." = new ".$typeName."(\$data);\n";
            $typeChecks .= "            \$successfulType = '".$typeName."';\n";
            $typeChecks .= "            \$successfulObject = \$".$propertyName.";\n";
            $typeChecks .= "            goto success;\n"; // Use goto instead of break
            $typeChecks .= "        } catch (\\Exception \$e) {\n";
            $typeChecks .= "            \$errors['".$typeName."'] = \$e->getMessage();\n";
            $typeChecks .= "        }\n\n";
        }
        
        $functions .= $typeChecks;
        $functions .= "        
        if (\$successfulObject === null) {
            throw new \\Exception('Could not create any of the union types for ".$object['name'].". Errors: ' . json_encode(\$errors));
        }
        
        success:
        // Set the successful object
        switch (\$successfulType) {
";
        
        foreach ($object['any_of'] as $type) {
            $typeName = $type['reference'];
            $propertyName = lcfirst($typeName);
            $functions .= "            case '".$typeName."':\n";
            $functions .= "                \$this->".$propertyName." = \$successfulObject;\n";
            $functions .= "                break;\n";
        }
        
        $functions .= "        }
        
        \$this->type = \$successfulType;
    }";

        return $functions;
    }

    private function generateGenericUnionProperties(array $object): string
    {
        $properties = "";
        
        foreach ($object['any_of'] as $type) {
            $typeName = $type['reference'];
            $propertyName = lcfirst($typeName);
            $properties .= "    public ?".$typeName." \$".$propertyName." = null;\n";
        }
        
        $properties .= "    public string \$type;\n\n";
        
        return $properties;
    }
}
