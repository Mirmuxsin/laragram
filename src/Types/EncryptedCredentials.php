<?php

namespace Milly\Laragram\Types;


/**
* EncryptedCredentials
 *
 *<p>Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#encryptedcredentials
 */
class EncryptedCredentials
{
    /**
    * <p>Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for <a href="https://core.telegram.org/bots/api/#encryptedpassportelement">EncryptedPassportElement</a> decryption and authentication</p>
    * @var string
    */
    public string $data;

    /**
    * <p>Base64-encoded data hash for data authentication</p>
    * @var string
    */
    public string $hash;

    /**
    * <p>Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption</p>
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