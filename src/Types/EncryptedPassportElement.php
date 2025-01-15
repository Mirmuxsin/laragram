<?php

namespace Milly\Laragram\Types;

/**
* EncryptedPassportElement
 *
 *<p>Base64-encoded element hash for using in <a href="https://core.telegram.org/bots/api/#passportelementerrorunspecified">PassportElementErrorUnspecified</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#encryptedpassportelement
 */
class EncryptedPassportElement
{
    /**
    * <p>Element type. One of “personal\<em>details”, “passport”, “driver\</em>license”, “identity\<em>card”, “internal\</em>passport”, “address”, “utility\<em>bill”, “bank\</em>statement”, “rental\<em>agreement”, “passport\</em>registration”, “temporary\<em>registration”, “phone\</em>number”, “email”.</p>
    * @var string
    */
    public string $type;

    /**
    * <p>*Optional*. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal\<em>details”, “passport”, “driver\</em>license”, “identity\<em>card”, “internal\</em>passport” and “address” types. Can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api/#encryptedcredentials">EncryptedCredentials</a>.</p>
    * @var string|null
    */
    public ?string $data = null;

    /**
    * <p>*Optional*. User's verified phone number; available only for “phone\_number” type</p>
    * @var string|null
    */
    public ?string $phone_number = null;

    /**
    * <p>*Optional*. User's verified email address; available only for “email” type</p>
    * @var string|null
    */
    public ?string $email = null;

    /**
    * <p>*Optional*. Array of encrypted files with documents provided by the user; available only for “utility\<em>bill”, “bank\</em>statement”, “rental\<em>agreement”, “passport\</em>registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api/#encryptedcredentials">EncryptedCredentials</a>.</p>
    * @var array|null
    */
    public ?array $files = null;

    /**
    * <p>*Optional*. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver\<em>license”, “identity\</em>card” and “internal\_passport”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api/#encryptedcredentials">EncryptedCredentials</a>.</p>
    * @var PassportFile|null
    */
    public ?PassportFile $front_side = null;

    /**
    * <p>*Optional*. Encrypted file with the reverse side of the document, provided by the user; available only for “driver\<em>license” and “identity\</em>card”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api/#encryptedcredentials">EncryptedCredentials</a>.</p>
    * @var PassportFile|null
    */
    public ?PassportFile $reverse_side = null;

    /**
    * <p>*Optional*. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver\<em>license”, “identity\</em>card” and “internal\_passport”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api/#encryptedcredentials">EncryptedCredentials</a>.</p>
    * @var PassportFile|null
    */
    public ?PassportFile $selfie = null;

    /**
    * <p>*Optional*. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver\<em>license”, “identity\</em>card”, “internal\<em>passport”, “utility\</em>bill”, “bank\<em>statement”, “rental\</em>agreement”, “passport\<em>registration” and “temporary\</em>registration” types. Files can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api/#encryptedcredentials">EncryptedCredentials</a>.</p>
    * @var array|null
    */
    public ?array $translation = null;

    /**
    * <p>Base64-encoded element hash for using in <a href="https://core.telegram.org/bots/api/#passportelementerrorunspecified">PassportElementErrorUnspecified</a></p>
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