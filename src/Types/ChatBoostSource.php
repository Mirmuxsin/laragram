<?php

namespace Milly\Laragram\Types;

/**
* ChatBoostSource
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostsource
 */
class ChatBoostSource
{


    public ChatBoostSourcePremium $chatBoostSourcePremium;

    public ChatBoostSourceGiftCode $chatBoostSourceGiftCode;

    public ChatBoostSourceGiveaway $chatBoostSourceGiveaway;



    public function __construct($data)
    {
        $this->chatBoostSourcePremium = new ChatBoostSourcePremium($data);
        $this->chatBoostSourceGiftCode = new ChatBoostSourceGiftCode($data);
        $this->chatBoostSourceGiveaway = new ChatBoostSourceGiveaway($data);
    }
}