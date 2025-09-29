<?php

namespace Milly\Laragram\Types;

/**
* ReactionType
 *
 *<p>This object describes the type of a reaction. Currently, it can be one of</p><p>* <a href="https://core.telegram.org/bots/api/#reactiontypeemoji">ReactionTypeEmoji</a>
* <a href="https://core.telegram.org/bots/api/#reactiontypecustomemoji">ReactionTypeCustomEmoji</a>
* <a href="https://core.telegram.org/bots/api/#reactiontypepaid">ReactionTypePaid</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#reactiontype
 */
class ReactionType
{
    public ?ReactionTypeEmoji $reactionTypeEmoji = null;
    public ?ReactionTypeCustomEmoji $reactionTypeCustomEmoji = null;
    public ?ReactionTypePaid $reactionTypePaid = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create ReactionTypeEmoji
        try {
            $reactionTypeEmoji = new ReactionTypeEmoji($data);
            $successfulType = 'ReactionTypeEmoji';
            $successfulObject = $reactionTypeEmoji;
            goto success;
        } catch (\Exception $e) {
            $errors['ReactionTypeEmoji'] = $e->getMessage();
        }

        // Try to create ReactionTypeCustomEmoji
        try {
            $reactionTypeCustomEmoji = new ReactionTypeCustomEmoji($data);
            $successfulType = 'ReactionTypeCustomEmoji';
            $successfulObject = $reactionTypeCustomEmoji;
            goto success;
        } catch (\Exception $e) {
            $errors['ReactionTypeCustomEmoji'] = $e->getMessage();
        }

        // Try to create ReactionTypePaid
        try {
            $reactionTypePaid = new ReactionTypePaid($data);
            $successfulType = 'ReactionTypePaid';
            $successfulObject = $reactionTypePaid;
            goto success;
        } catch (\Exception $e) {
            $errors['ReactionTypePaid'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for ReactionType. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'ReactionTypeEmoji':
                $this->reactionTypeEmoji = $successfulObject;
                break;
            case 'ReactionTypeCustomEmoji':
                $this->reactionTypeCustomEmoji = $successfulObject;
                break;
            case 'ReactionTypePaid':
                $this->reactionTypePaid = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}