<?php

namespace Milly\Laragram\Types;

/**
* ShippingOption
 *
 *<p>List of price portions</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#shippingoption
 */
class ShippingOption
{
    /**
    * <p>Shipping option identifier</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Option title</p>
    * @var string
    */
    public string $title;

    /**
    * <p>List of price portions</p>
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