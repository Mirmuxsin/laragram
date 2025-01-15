<?php

namespace Milly\Laragram\Types;

/**
* ChatBoost
 *
 *<p>Source of the added boost</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboost
 */
class ChatBoost
{
    /**
    * <p>Unique identifier of the boost</p>
    * @var string
    */
    public string $boost_id;

    /**
    * <p>Point in time (Unix timestamp) when the chat was boosted</p>
    * @var int
    */
    public int $add_date;

    /**
    * <p>Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged</p>
    * @var int
    */
    public int $expiration_date;

    /**
    * <p>Source of the added boost</p>
    * @var ChatBoostSource
    */
    public ChatBoostSource $source;



    public function __construct($data)
    {
        $this->boost_id = $data['boost_id'];
        $this->add_date = $data['add_date'];
        $this->expiration_date = $data['expiration_date'];
        $this->source = new ChatBoostSource($data['source']);

    }
}