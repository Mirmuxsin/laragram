<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ShippingQuery
 *
 *This object contains information about an incoming shipping query.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#shippingquery
 */
class ShippingQuery extends Laragram
{
    /**
    * Unique query identifier
    * @var string
    */
    public string $id;

    /**
    * User who sent the query
    * @var User
    */
    public User $from;

    /**
    * Bot specified invoice payload
    * @var string
    */
    public string $invoice_payload;

    /**
    * User specified shipping address
    * @var ShippingAddress
    */
    public ShippingAddress $shipping_address;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->from = new User($data['from']);

        $this->invoice_payload = $data['invoice_payload'];
        $this->shipping_address = new ShippingAddress($data['shipping_address']);

    }
}