<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* OrderInfo
 *
 *This object represents information about an order.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#orderinfo
 */
class OrderInfo extends Laragram
{
    /**
    * *Optional*. User name
    * @var string|null
    */
    public ?string $name = null;

    /**
    * *Optional*. User's phone number
    * @var string|null
    */
    public ?string $phone_number = null;

    /**
    * *Optional*. User email
    * @var string|null
    */
    public ?string $email = null;

    /**
    * *Optional*. User shipping address
    * @var ShippingAddress|null
    */
    public ?ShippingAddress $shipping_address = null;



    public function __construct($data)
    {
        if (isset($data['name'])){
            $this->name = $data['name'];
        }

        if (isset($data['phone_number'])){
            $this->phone_number = $data['phone_number'];
        }

        if (isset($data['email'])){
            $this->email = $data['email'];
        }

        if (isset($data['shipping_address'])){
            $this->shipping_address = new ShippingAddress($data['shipping_address']);
        }

    }
}