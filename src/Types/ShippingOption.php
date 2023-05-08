<?php

namespace Milly\Laragram\Types;


/**
* ShippingOption
 *
 *This object represents one shipping option.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#shippingoption
 */
class ShippingOption
{
    /**
    * Shipping option identifier
    * @var string
    */
    public string $id;

    /**
    * Option title
    * @var string
    */
    public string $title;

    /**
    * List of price portions
    * @var array
    */
    public array $prices;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->prices = $data['prices'];
    }
}