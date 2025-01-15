<?php

namespace Milly\Laragram\Types;

/**
* ShippingAddress
 *
 *<p>Address post code</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#shippingaddress
 */
class ShippingAddress
{
    /**
    * <p>Two-letter <a href="https://en.wikipedia.org/wiki/ISO<em>3166-1</em>alpha-2">ISO 3166-1 alpha-2</a> country code</p>
    * @var string
    */
    public string $country_code;

    /**
    * <p>State, if applicable</p>
    * @var string
    */
    public string $state;

    /**
    * <p>City</p>
    * @var string
    */
    public string $city;

    /**
    * <p>First line for the address</p>
    * @var string
    */
    public string $street_line1;

    /**
    * <p>Second line for the address</p>
    * @var string
    */
    public string $street_line2;

    /**
    * <p>Address post code</p>
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