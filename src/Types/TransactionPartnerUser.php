<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartnerUser
 *
 *<p>*Optional*. The gift sent to the user by the bot</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartneruser
 */
class TransactionPartnerUser
{
    /**
    * <p>Type of the transaction partner, always “user”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Information about the user</p>
    * @var User
    */
    public User $user;

    /**
    * <p>*Optional*. Information about the affiliate that received a commission via this transaction</p>
    * @var AffiliateInfo|null
    */
    public ?AffiliateInfo $affiliate = null;

    /**
    * <p>*Optional*. Bot-specified invoice payload</p>
    * @var string|null
    */
    public ?string $invoice_payload = null;

    /**
    * <p>*Optional*. The duration of the paid subscription</p>
    * @var int|null
    */
    public ?int $subscription_period = null;

    /**
    * <p>*Optional*. Information about the paid media bought by the user</p>
    * @var array|null
    */
    public ?array $paid_media = null;

    /**
    * <p>*Optional*. Bot-specified paid media payload</p>
    * @var string|null
    */
    public ?string $paid_media_payload = null;

    /**
    * <p>*Optional*. The gift sent to the user by the bot</p>
    * @var Gift|null
    */
    public ?Gift $gift = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->user = new User($data['user']);

        if (isset($data['affiliate'])){
            $this->affiliate = new AffiliateInfo($data['affiliate']);
        }

        if (isset($data['invoice_payload'])){
            $this->invoice_payload = $data['invoice_payload'];
        }

        if (isset($data['subscription_period'])){
            $this->subscription_period = $data['subscription_period'];
        }

        if (isset($data['paid_media'])){
            $this->paid_media = $data['paid_media'];
        }

        if (isset($data['paid_media_payload'])){
            $this->paid_media_payload = $data['paid_media_payload'];
        }

        if (isset($data['gift'])){
            $this->gift = new Gift($data['gift']);
        }

    }
}