<?php

namespace Milly\Laragram\Types;


/**
* PassportData
 *
 *Describes Telegram Passport data shared with the bot by the user.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportdata
 */
class PassportData
{
    /**
    * Array with information about documents and other Telegram Passport elements that was shared with the bot
    * @var array
    */
    public array $data;

    /**
    * Encrypted credentials required to decrypt the data
    * @var EncryptedCredentials
    */
    public EncryptedCredentials $credentials;



    public function __construct($data)
    {
        $this->data = $data['data'];
        $this->credentials = new EncryptedCredentials($data['credentials']);

    }
}