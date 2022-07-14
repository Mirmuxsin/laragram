<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ShippingAddress
 *
 *This object represents a shipping address.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#shippingaddress
 */
class ShippingAddress extends Laragram
{
    /**
    * Two-letter ISO 3166-1 alpha-2 country code
    * @var string
    */
    public string $country_code;

    /**
    * State, if applicable
    * @var string
    */
    public string $state;

    /**
    * City
    * @var string
    */
    public string $city;

    /**
    * First line for the address
    * @var string
    */
    public string $street_line1;

    /**
    * Second line for the address
    * @var string
    */
    public string $street_line2;

    /**
    * Address post code
    * @var string
    */
    public string $post_code;



    public function __construct($data)
    {
        $this->country_code = $data['country_code'];
        $this->state = $data['state'];
        $this->city = $data['city'];
        $this->street_line1 = $data['street_line1'];
        $this->street_line2 = $data['street_line2'];
        $this->post_code = $data['post_code'];
    }
}