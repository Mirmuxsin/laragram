<?php

namespace Milly\Laragram\Types;

/**
* PassportElementError
 *
 * Union type that can be one of: PassportElementErrorDataField, PassportElementErrorFrontSide, PassportElementErrorReverseSide, PassportElementErrorSelfie, PassportElementErrorFile, PassportElementErrorFiles, PassportElementErrorTranslationFile, PassportElementErrorTranslationFiles, PassportElementErrorUnspecified
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerror
 */
class PassportElementError
{


    public ?PassportElementErrorDataField $passportElementErrorDataField = null;
    public ?PassportElementErrorFrontSide $passportElementErrorFrontSide = null;
    public ?PassportElementErrorReverseSide $passportElementErrorReverseSide = null;
    public ?PassportElementErrorSelfie $passportElementErrorSelfie = null;
    public ?PassportElementErrorFile $passportElementErrorFile = null;
    public ?PassportElementErrorFiles $passportElementErrorFiles = null;
    public ?PassportElementErrorTranslationFile $passportElementErrorTranslationFile = null;
    public ?PassportElementErrorTranslationFiles $passportElementErrorTranslationFiles = null;
    public ?PassportElementErrorUnspecified $passportElementErrorUnspecified = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create PassportElementErrorDataField
        try {
            $passportElementErrorDataField = new PassportElementErrorDataField($data);
            $successfulType = 'PassportElementErrorDataField';
            $successfulObject = $passportElementErrorDataField;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorDataField'] = $e->getMessage();
        }

        // Try to create PassportElementErrorFrontSide
        try {
            $passportElementErrorFrontSide = new PassportElementErrorFrontSide($data);
            $successfulType = 'PassportElementErrorFrontSide';
            $successfulObject = $passportElementErrorFrontSide;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorFrontSide'] = $e->getMessage();
        }

        // Try to create PassportElementErrorReverseSide
        try {
            $passportElementErrorReverseSide = new PassportElementErrorReverseSide($data);
            $successfulType = 'PassportElementErrorReverseSide';
            $successfulObject = $passportElementErrorReverseSide;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorReverseSide'] = $e->getMessage();
        }

        // Try to create PassportElementErrorSelfie
        try {
            $passportElementErrorSelfie = new PassportElementErrorSelfie($data);
            $successfulType = 'PassportElementErrorSelfie';
            $successfulObject = $passportElementErrorSelfie;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorSelfie'] = $e->getMessage();
        }

        // Try to create PassportElementErrorFile
        try {
            $passportElementErrorFile = new PassportElementErrorFile($data);
            $successfulType = 'PassportElementErrorFile';
            $successfulObject = $passportElementErrorFile;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorFile'] = $e->getMessage();
        }

        // Try to create PassportElementErrorFiles
        try {
            $passportElementErrorFiles = new PassportElementErrorFiles($data);
            $successfulType = 'PassportElementErrorFiles';
            $successfulObject = $passportElementErrorFiles;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorFiles'] = $e->getMessage();
        }

        // Try to create PassportElementErrorTranslationFile
        try {
            $passportElementErrorTranslationFile = new PassportElementErrorTranslationFile($data);
            $successfulType = 'PassportElementErrorTranslationFile';
            $successfulObject = $passportElementErrorTranslationFile;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorTranslationFile'] = $e->getMessage();
        }

        // Try to create PassportElementErrorTranslationFiles
        try {
            $passportElementErrorTranslationFiles = new PassportElementErrorTranslationFiles($data);
            $successfulType = 'PassportElementErrorTranslationFiles';
            $successfulObject = $passportElementErrorTranslationFiles;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorTranslationFiles'] = $e->getMessage();
        }

        // Try to create PassportElementErrorUnspecified
        try {
            $passportElementErrorUnspecified = new PassportElementErrorUnspecified($data);
            $successfulType = 'PassportElementErrorUnspecified';
            $successfulObject = $passportElementErrorUnspecified;
            break;
        } catch (Exception $e) {
            $errors['PassportElementErrorUnspecified'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for PassportElementError. Errors: ' . json_encode($errors));
        }
        
        // Set the successful object
        switch ($successfulType) {
            case 'PassportElementErrorDataField':
                $this->passportElementErrorDataField = $successfulObject;
                break;
            case 'PassportElementErrorFrontSide':
                $this->passportElementErrorFrontSide = $successfulObject;
                break;
            case 'PassportElementErrorReverseSide':
                $this->passportElementErrorReverseSide = $successfulObject;
                break;
            case 'PassportElementErrorSelfie':
                $this->passportElementErrorSelfie = $successfulObject;
                break;
            case 'PassportElementErrorFile':
                $this->passportElementErrorFile = $successfulObject;
                break;
            case 'PassportElementErrorFiles':
                $this->passportElementErrorFiles = $successfulObject;
                break;
            case 'PassportElementErrorTranslationFile':
                $this->passportElementErrorTranslationFile = $successfulObject;
                break;
            case 'PassportElementErrorTranslationFiles':
                $this->passportElementErrorTranslationFiles = $successfulObject;
                break;
            case 'PassportElementErrorUnspecified':
                $this->passportElementErrorUnspecified = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}