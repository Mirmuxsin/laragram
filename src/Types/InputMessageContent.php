<?php

namespace Milly\Laragram\Types;

/**
* InputMessageContent
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmessagecontent
 */
class InputMessageContent
{


    public InputTextMessageContent $inputTextMessageContent;

    public InputLocationMessageContent $inputLocationMessageContent;

    public InputVenueMessageContent $inputVenueMessageContent;

    public InputContactMessageContent $inputContactMessageContent;

    public InputInvoiceMessageContent $inputInvoiceMessageContent;



    public function __construct($data)
    {
        $this->inputTextMessageContent = new InputTextMessageContent($data);
        $this->inputLocationMessageContent = new InputLocationMessageContent($data);
        $this->inputVenueMessageContent = new InputVenueMessageContent($data);
        $this->inputContactMessageContent = new InputContactMessageContent($data);
        $this->inputInvoiceMessageContent = new InputInvoiceMessageContent($data);
    }
}