<?php

namespace Milly\Laragram\Types;

/**
* InputMessageContent
 *
 * Union type that can be one of: InputTextMessageContent, InputLocationMessageContent, InputVenueMessageContent, InputContactMessageContent, InputInvoiceMessageContent
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmessagecontent
 */
class InputMessageContent
{


    public ?InputTextMessageContent $inputTextMessageContent = null;
    public ?InputLocationMessageContent $inputLocationMessageContent = null;
    public ?InputVenueMessageContent $inputVenueMessageContent = null;
    public ?InputContactMessageContent $inputContactMessageContent = null;
    public ?InputInvoiceMessageContent $inputInvoiceMessageContent = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create InputTextMessageContent
        try {
            $inputTextMessageContent = new InputTextMessageContent($data);
            $successfulType = 'InputTextMessageContent';
            $successfulObject = $inputTextMessageContent;
            break;
        } catch (Exception $e) {
            $errors['InputTextMessageContent'] = $e->getMessage();
        }

        // Try to create InputLocationMessageContent
        try {
            $inputLocationMessageContent = new InputLocationMessageContent($data);
            $successfulType = 'InputLocationMessageContent';
            $successfulObject = $inputLocationMessageContent;
            break;
        } catch (Exception $e) {
            $errors['InputLocationMessageContent'] = $e->getMessage();
        }

        // Try to create InputVenueMessageContent
        try {
            $inputVenueMessageContent = new InputVenueMessageContent($data);
            $successfulType = 'InputVenueMessageContent';
            $successfulObject = $inputVenueMessageContent;
            break;
        } catch (Exception $e) {
            $errors['InputVenueMessageContent'] = $e->getMessage();
        }

        // Try to create InputContactMessageContent
        try {
            $inputContactMessageContent = new InputContactMessageContent($data);
            $successfulType = 'InputContactMessageContent';
            $successfulObject = $inputContactMessageContent;
            break;
        } catch (Exception $e) {
            $errors['InputContactMessageContent'] = $e->getMessage();
        }

        // Try to create InputInvoiceMessageContent
        try {
            $inputInvoiceMessageContent = new InputInvoiceMessageContent($data);
            $successfulType = 'InputInvoiceMessageContent';
            $successfulObject = $inputInvoiceMessageContent;
            break;
        } catch (Exception $e) {
            $errors['InputInvoiceMessageContent'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for InputMessageContent. Errors: ' . json_encode($errors));
        }
        
        // Set the successful object
        switch ($successfulType) {
            case 'InputTextMessageContent':
                $this->inputTextMessageContent = $successfulObject;
                break;
            case 'InputLocationMessageContent':
                $this->inputLocationMessageContent = $successfulObject;
                break;
            case 'InputVenueMessageContent':
                $this->inputVenueMessageContent = $successfulObject;
                break;
            case 'InputContactMessageContent':
                $this->inputContactMessageContent = $successfulObject;
                break;
            case 'InputInvoiceMessageContent':
                $this->inputInvoiceMessageContent = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}