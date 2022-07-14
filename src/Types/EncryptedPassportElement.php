<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* EncryptedPassportElement
 *
 *Describes documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#encryptedpassportelement
 */
class EncryptedPassportElement extends Laragram
{
    /**
    * Element type. One of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”, “phone\_number”, “email”.
    * @var string
    */
    public string $type;

    /**
    * *Optional*. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport” and “address” types. Can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
    * @var string|null
    */
    public ?string $data = null;

    /**
    * *Optional*. User's verified phone number, available only for “phone\_number” type
    * @var string|null
    */
    public ?string $phone_number = null;

    /**
    * *Optional*. User's verified email address, available only for “email” type
    * @var string|null
    */
    public ?string $email = null;

    /**
    * *Optional*. Array of encrypted files with documents provided by the user, available for “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
    * @var array|null
    */
    public ?array $files = null;

    /**
    * *Optional*. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
    * @var PassportFile|null
    */
    public ?PassportFile $front_side = null;

    /**
    * *Optional*. Encrypted file with the reverse side of the document, provided by the user. Available for “driver\_license” and “identity\_card”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
    * @var PassportFile|null
    */
    public ?PassportFile $reverse_side = null;

    /**
    * *Optional*. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
    * @var PassportFile|null
    */
    public ?PassportFile $selfie = null;

    /**
    * *Optional*. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
    * @var array|null
    */
    public ?array $translation = null;

    /**
    * Base64-encoded element hash for using in [PassportElementErrorUnspecified](https://core.telegram.org/bots/api/#passportelementerrorunspecified)
    * @var string
    */
    public string $hash;



    public function __construct($data)
    {
        $this->type = $data['type'];
        if (isset($data['data'])){
            $this->data = $data['data'];
        }

        if (isset($data['phone_number'])){
            $this->phone_number = $data['phone_number'];
        }

        if (isset($data['email'])){
            $this->email = $data['email'];
        }

        if (isset($data['files'])){
            $this->files = $data['files'];
        }

        if (isset($data['front_side'])){
            $this->front_side = new PassportFile($data['front_side']);
        }

        if (isset($data['reverse_side'])){
            $this->reverse_side = new PassportFile($data['reverse_side']);
        }

        if (isset($data['selfie'])){
            $this->selfie = new PassportFile($data['selfie']);
        }

        if (isset($data['translation'])){
            $this->translation = $data['translation'];
        }

        $this->hash = $data['hash'];
    }
}