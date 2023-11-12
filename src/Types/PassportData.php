<?php

namespace Milly\Laragram\Types;


/**
* PassportData
 *
 *<p>Encrypted credentials required to decrypt the data</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportdata
 */
class PassportData
{
    /**
    * <p>Array with information about documents and other Telegram Passport elements that was shared with the bot</p>
    * @var array
    */
    public array $data;

    /**
    * <p>Encrypted credentials required to decrypt the data</p>
    * @var EncryptedCredentials
    */
    public EncryptedCredentials $credentials;



    public function __construct($data)
    {
        $this->data = $data['data'];
        $this->credentials = new EncryptedCredentials($data['credentials']);

    }
}