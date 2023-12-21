<?php

namespace Milly\Laragram\Types;


/**
* ShippingQuery
 *
 *<p>User specified shipping address</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#shippingquery
 */
class ShippingQuery
{
    /**
    * <p>Unique query identifier</p>
    * @var string
    */
    public string $id;

    /**
    * <p>User who sent the query</p>
    * @var User
    */
    public User $from;

    /**
    * <p>Bot specified invoice payload</p>
    * @var string
    */
    public string $invoice_payload;

    /**
    * <p>User specified shipping address</p>
    * @var ShippingAddress
    */
    public ShippingAddress $shipping_address;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['shipping_query'];
        $this->id = $data['id'];
        $this->from = new User($data['from']);

        $this->invoice_payload = $data['invoice_payload'];
        $this->shipping_address = new ShippingAddress($data['shipping_address']);

    }
}