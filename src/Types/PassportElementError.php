<?php

namespace Milly\Laragram\Types;

/**
* PassportElementError
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerror
 */
class PassportElementError
{


    public PassportElementErrorDataField $passportElementErrorDataField;

    public PassportElementErrorFrontSide $passportElementErrorFrontSide;

    public PassportElementErrorReverseSide $passportElementErrorReverseSide;

    public PassportElementErrorSelfie $passportElementErrorSelfie;

    public PassportElementErrorFile $passportElementErrorFile;

    public PassportElementErrorFiles $passportElementErrorFiles;

    public PassportElementErrorTranslationFile $passportElementErrorTranslationFile;

    public PassportElementErrorTranslationFiles $passportElementErrorTranslationFiles;

    public PassportElementErrorUnspecified $passportElementErrorUnspecified;



    public function __construct($data)
    {
        $this->passportElementErrorDataField = new PassportElementErrorDataField($data);
        $this->passportElementErrorFrontSide = new PassportElementErrorFrontSide($data);
        $this->passportElementErrorReverseSide = new PassportElementErrorReverseSide($data);
        $this->passportElementErrorSelfie = new PassportElementErrorSelfie($data);
        $this->passportElementErrorFile = new PassportElementErrorFile($data);
        $this->passportElementErrorFiles = new PassportElementErrorFiles($data);
        $this->passportElementErrorTranslationFile = new PassportElementErrorTranslationFile($data);
        $this->passportElementErrorTranslationFiles = new PassportElementErrorTranslationFiles($data);
        $this->passportElementErrorUnspecified = new PassportElementErrorUnspecified($data);
    }
}