<?php

namespace Milly\Laragram\Types;


/**
* OrderInfo
 *
 *<p>*Optional*. User shipping address</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#orderinfo
 */
class OrderInfo
{
    /**
    * <p>*Optional*. User name</p>
    * @var string|null
    */
    public ?string $name = null;

    /**
    * <p>*Optional*. User's phone number</p>
    * @var string|null
    */
    public ?string $phone_number = null;

    /**
    * <p>*Optional*. User email</p>
    * @var string|null
    */
    public ?string $email = null;

    /**
    * <p>*Optional*. User shipping address</p>
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