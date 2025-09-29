<?php

namespace Milly\Laragram\Types;

/**
* RevenueWithdrawalState
 *
 * Union type that can be one of: RevenueWithdrawalStatePending, RevenueWithdrawalStateSucceeded, RevenueWithdrawalStateFailed
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#revenuewithdrawalstate
 */
class RevenueWithdrawalState
{


    public ?RevenueWithdrawalStatePending $revenueWithdrawalStatePending = null;
    public ?RevenueWithdrawalStateSucceeded $revenueWithdrawalStateSucceeded = null;
    public ?RevenueWithdrawalStateFailed $revenueWithdrawalStateFailed = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create RevenueWithdrawalStatePending
        try {
            $revenueWithdrawalStatePending = new RevenueWithdrawalStatePending($data);
            $successfulType = 'RevenueWithdrawalStatePending';
            $successfulObject = $revenueWithdrawalStatePending;
            break;
        } catch (Exception $e) {
            $errors['RevenueWithdrawalStatePending'] = $e->getMessage();
        }

        // Try to create RevenueWithdrawalStateSucceeded
        try {
            $revenueWithdrawalStateSucceeded = new RevenueWithdrawalStateSucceeded($data);
            $successfulType = 'RevenueWithdrawalStateSucceeded';
            $successfulObject = $revenueWithdrawalStateSucceeded;
            break;
        } catch (Exception $e) {
            $errors['RevenueWithdrawalStateSucceeded'] = $e->getMessage();
        }

        // Try to create RevenueWithdrawalStateFailed
        try {
            $revenueWithdrawalStateFailed = new RevenueWithdrawalStateFailed($data);
            $successfulType = 'RevenueWithdrawalStateFailed';
            $successfulObject = $revenueWithdrawalStateFailed;
            break;
        } catch (Exception $e) {
            $errors['RevenueWithdrawalStateFailed'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for RevenueWithdrawalState. Errors: ' . json_encode($errors));
        }
        
        // Set the successful object
        switch ($successfulType) {
            case 'RevenueWithdrawalStatePending':
                $this->revenueWithdrawalStatePending = $successfulObject;
                break;
            case 'RevenueWithdrawalStateSucceeded':
                $this->revenueWithdrawalStateSucceeded = $successfulObject;
                break;
            case 'RevenueWithdrawalStateFailed':
                $this->revenueWithdrawalStateFailed = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}