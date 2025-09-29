<?php

namespace Milly\Laragram\Types;

/**
* ChatBoostSource
 *
 *<p>This object describes the source of a chat boost. It can be one of</p><p>* <a href="https://core.telegram.org/bots/api/#chatboostsourcepremium">ChatBoostSourcePremium</a>
* <a href="https://core.telegram.org/bots/api/#chatboostsourcegiftcode">ChatBoostSourceGiftCode</a>
* <a href="https://core.telegram.org/bots/api/#chatboostsourcegiveaway">ChatBoostSourceGiveaway</a></p>
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
            goto success;
        } catch (\Exception $e) {
            $errors['ChatBoostSourcePremium'] = $e->getMessage();
        }

        // Try to create ChatBoostSourceGiftCode
        try {
            $chatBoostSourceGiftCode = new ChatBoostSourceGiftCode($data);
            $successfulType = 'ChatBoostSourceGiftCode';
            $successfulObject = $chatBoostSourceGiftCode;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatBoostSourceGiftCode'] = $e->getMessage();
        }

        // Try to create ChatBoostSourceGiveaway
        try {
            $chatBoostSourceGiveaway = new ChatBoostSourceGiveaway($data);
            $successfulType = 'ChatBoostSourceGiveaway';
            $successfulObject = $chatBoostSourceGiveaway;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatBoostSourceGiveaway'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for ChatBoostSource. Errors: ' . json_encode($errors));
        }
        
        success:
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