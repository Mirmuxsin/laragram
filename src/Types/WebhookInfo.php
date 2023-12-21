<?php

namespace Milly\Laragram\Types;


/**
* WebhookInfo
 *
 *<p>*Optional*. A list of update types the bot is subscribed to. Defaults to all update types except *chat\_member*</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#webhookinfo
 */
class WebhookInfo
{
    /**
    * <p>Webhook URL, may be empty if webhook is not set up</p>
    * @var string
    */
    public string $url;

    /**
    * <p>*True*, if a custom certificate was provided for webhook certificate checks</p>
    * @var bool
    */
    public bool $has_custom_certificate;

    /**
    * <p>Number of updates awaiting delivery</p>
    * @var int
    */
    public int $pending_update_count;

    /**
    * <p>*Optional*. Currently used webhook IP address</p>
    * @var string|null
    */
    public ?string $ip_address = null;

    /**
    * <p>*Optional*. Unix time for the most recent error that happened when trying to deliver an update via webhook</p>
    * @var int|null
    */
    public ?int $last_error_date = null;

    /**
    * <p>*Optional*. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook</p>
    * @var string|null
    */
    public ?string $last_error_message = null;

    /**
    * <p>*Optional*. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters</p>
    * @var int|null
    */
    public ?int $last_synchronization_error_date = null;

    /**
    * <p>*Optional*. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery</p>
    * @var int|null
    */
    public ?int $max_connections = null;

    /**
    * <p>*Optional*. A list of update types the bot is subscribed to. Defaults to all update types except *chat\_member*</p>
    * @var array|null
    */
    public ?array $allowed_updates = null;



    public function __construct($data)
    {
        $this->url = $data['url'];
        $this->has_custom_certificate = $data['has_custom_certificate'];
        $this->pending_update_count = $data['pending_update_count'];
        if (isset($data['ip_address'])){
            $this->ip_address = $data['ip_address'];
        }

        if (isset($data['last_error_date'])){
            $this->last_error_date = $data['last_error_date'];
        }

        if (isset($data['last_error_message'])){
            $this->last_error_message = $data['last_error_message'];
        }

        if (isset($data['last_synchronization_error_date'])){
            $this->last_synchronization_error_date = $data['last_synchronization_error_date'];
        }

        if (isset($data['max_connections'])){
            $this->max_connections = $data['max_connections'];
        }

        if (isset($data['allowed_updates'])){
            $this->allowed_updates = $data['allowed_updates'];
        }

    }
}