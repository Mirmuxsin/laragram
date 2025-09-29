<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartner
 *
 * Union type that can be one of: TransactionPartnerUser, TransactionPartnerChat, TransactionPartnerAffiliateProgram, TransactionPartnerFragment, TransactionPartnerTelegramAds, TransactionPartnerTelegramApi, TransactionPartnerOther
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartner
 */
class TransactionPartner
{


    public ?TransactionPartnerUser $transactionPartnerUser = null;
    public ?TransactionPartnerChat $transactionPartnerChat = null;
    public ?TransactionPartnerAffiliateProgram $transactionPartnerAffiliateProgram = null;
    public ?TransactionPartnerFragment $transactionPartnerFragment = null;
    public ?TransactionPartnerTelegramAds $transactionPartnerTelegramAds = null;
    public ?TransactionPartnerTelegramApi $transactionPartnerTelegramApi = null;
    public ?TransactionPartnerOther $transactionPartnerOther = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create TransactionPartnerUser
        try {
            $transactionPartnerUser = new TransactionPartnerUser($data);
            $successfulType = 'TransactionPartnerUser';
            $successfulObject = $transactionPartnerUser;
            break;
        } catch (Exception $e) {
            $errors['TransactionPartnerUser'] = $e->getMessage();
        }

        // Try to create TransactionPartnerChat
        try {
            $transactionPartnerChat = new TransactionPartnerChat($data);
            $successfulType = 'TransactionPartnerChat';
            $successfulObject = $transactionPartnerChat;
            break;
        } catch (Exception $e) {
            $errors['TransactionPartnerChat'] = $e->getMessage();
        }

        // Try to create TransactionPartnerAffiliateProgram
        try {
            $transactionPartnerAffiliateProgram = new TransactionPartnerAffiliateProgram($data);
            $successfulType = 'TransactionPartnerAffiliateProgram';
            $successfulObject = $transactionPartnerAffiliateProgram;
            break;
        } catch (Exception $e) {
            $errors['TransactionPartnerAffiliateProgram'] = $e->getMessage();
        }

        // Try to create TransactionPartnerFragment
        try {
            $transactionPartnerFragment = new TransactionPartnerFragment($data);
            $successfulType = 'TransactionPartnerFragment';
            $successfulObject = $transactionPartnerFragment;
            break;
        } catch (Exception $e) {
            $errors['TransactionPartnerFragment'] = $e->getMessage();
        }

        // Try to create TransactionPartnerTelegramAds
        try {
            $transactionPartnerTelegramAds = new TransactionPartnerTelegramAds($data);
            $successfulType = 'TransactionPartnerTelegramAds';
            $successfulObject = $transactionPartnerTelegramAds;
            break;
        } catch (Exception $e) {
            $errors['TransactionPartnerTelegramAds'] = $e->getMessage();
        }

        // Try to create TransactionPartnerTelegramApi
        try {
            $transactionPartnerTelegramApi = new TransactionPartnerTelegramApi($data);
            $successfulType = 'TransactionPartnerTelegramApi';
            $successfulObject = $transactionPartnerTelegramApi;
            break;
        } catch (Exception $e) {
            $errors['TransactionPartnerTelegramApi'] = $e->getMessage();
        }

        // Try to create TransactionPartnerOther
        try {
            $transactionPartnerOther = new TransactionPartnerOther($data);
            $successfulType = 'TransactionPartnerOther';
            $successfulObject = $transactionPartnerOther;
            break;
        } catch (Exception $e) {
            $errors['TransactionPartnerOther'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for TransactionPartner. Errors: ' . json_encode($errors));
        }
        
        // Set the successful object
        switch ($successfulType) {
            case 'TransactionPartnerUser':
                $this->transactionPartnerUser = $successfulObject;
                break;
            case 'TransactionPartnerChat':
                $this->transactionPartnerChat = $successfulObject;
                break;
            case 'TransactionPartnerAffiliateProgram':
                $this->transactionPartnerAffiliateProgram = $successfulObject;
                break;
            case 'TransactionPartnerFragment':
                $this->transactionPartnerFragment = $successfulObject;
                break;
            case 'TransactionPartnerTelegramAds':
                $this->transactionPartnerTelegramAds = $successfulObject;
                break;
            case 'TransactionPartnerTelegramApi':
                $this->transactionPartnerTelegramApi = $successfulObject;
                break;
            case 'TransactionPartnerOther':
                $this->transactionPartnerOther = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}