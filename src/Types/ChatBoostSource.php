<?php

namespace Milly\Laragram\Types;

/**
* ChatBoostSource
 *
 * Union type that can be one of: ChatBoostSourcePremium, ChatBoostSourceGiftCode, ChatBoostSourceGiveaway
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostsource
 */
class ChatBoostSource
{


    public ?ChatBoostSourcePremium $chatBoostSourcePremium = null;
    public ?ChatBoostSourceGiftCode $chatBoostSourceGiftCode = null;
    public ?ChatBoostSourceGiveaway $chatBoostSourceGiveaway = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create ChatBoostSourcePremium
        try {
            $chatBoostSourcePremium = new ChatBoostSourcePremium($data);
            $successfulType = 'ChatBoostSourcePremium';
            $successfulObject = $chatBoostSourcePremium;
            break;
        } catch (Exception $e) {
            $errors['ChatBoostSourcePremium'] = $e->getMessage();
        }

        // Try to create ChatBoostSourceGiftCode
        try {
            $chatBoostSourceGiftCode = new ChatBoostSourceGiftCode($data);
            $successfulType = 'ChatBoostSourceGiftCode';
            $successfulObject = $chatBoostSourceGiftCode;
            break;
        } catch (Exception $e) {
            $errors['ChatBoostSourceGiftCode'] = $e->getMessage();
        }

        // Try to create ChatBoostSourceGiveaway
        try {
            $chatBoostSourceGiveaway = new ChatBoostSourceGiveaway($data);
            $successfulType = 'ChatBoostSourceGiveaway';
            $successfulObject = $chatBoostSourceGiveaway;
            break;
        } catch (Exception $e) {
            $errors['ChatBoostSourceGiveaway'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for ChatBoostSource. Errors: ' . json_encode($errors));
        }
        
        // Set the successful object
        switch ($successfulType) {
            case 'ChatBoostSourcePremium':
                $this->chatBoostSourcePremium = $successfulObject;
                break;
            case 'ChatBoostSourceGiftCode':
                $this->chatBoostSourceGiftCode = $successfulObject;
                break;
            case 'ChatBoostSourceGiveaway':
                $this->chatBoostSourceGiveaway = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}