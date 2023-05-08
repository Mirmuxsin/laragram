<?php

namespace Milly\Laragram\Types;


/**
* EncryptedCredentials
 *
 *Describes data required for decrypting and authenticating [EncryptedPassportElement](https://core.telegram.org/bots/api/#encryptedpassportelement). See the [Telegram Passport Documentation](https://core.telegram.org/passport#receiving-information) for a complete description of the data decryption and authentication processes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#encryptedcredentials
 */
class EncryptedCredentials
{
    /**
    * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for [EncryptedPassportElement](https://core.telegram.org/bots/api/#encryptedpassportelement) decryption and authentication
    * @var string
    */
    public string $data;

    /**
    * Base64-encoded data hash for data authentication
    * @var string
    */
    public string $hash;

    /**
    * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
    * @var string
    */
    public string $secret;



    public function __construct($data)
    {
        $this->data = $data['data'];
        $this->hash = $data['hash'];
        $this->secret = $data['secret'];
    }
}