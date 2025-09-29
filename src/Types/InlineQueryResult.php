<?php

namespace Milly\Laragram\Types;

/**
* InlineQueryResult
 *
 * Union type that can be one of: InlineQueryResultCachedAudio, InlineQueryResultCachedDocument, InlineQueryResultCachedGif, InlineQueryResultCachedMpeg4Gif, InlineQueryResultCachedPhoto, InlineQueryResultCachedSticker, InlineQueryResultCachedVideo, InlineQueryResultCachedVoice, InlineQueryResultArticle, InlineQueryResultAudio, InlineQueryResultContact, InlineQueryResultGame, InlineQueryResultDocument, InlineQueryResultGif, InlineQueryResultLocation, InlineQueryResultMpeg4Gif, InlineQueryResultPhoto, InlineQueryResultVenue, InlineQueryResultVideo, InlineQueryResultVoice
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresult
 */
class InlineQueryResult
{


    public ?InlineQueryResultCachedAudio $inlineQueryResultCachedAudio = null;
    public ?InlineQueryResultCachedDocument $inlineQueryResultCachedDocument = null;
    public ?InlineQueryResultCachedGif $inlineQueryResultCachedGif = null;
    public ?InlineQueryResultCachedMpeg4Gif $inlineQueryResultCachedMpeg4Gif = null;
    public ?InlineQueryResultCachedPhoto $inlineQueryResultCachedPhoto = null;
    public ?InlineQueryResultCachedSticker $inlineQueryResultCachedSticker = null;
    public ?InlineQueryResultCachedVideo $inlineQueryResultCachedVideo = null;
    public ?InlineQueryResultCachedVoice $inlineQueryResultCachedVoice = null;
    public ?InlineQueryResultArticle $inlineQueryResultArticle = null;
    public ?InlineQueryResultAudio $inlineQueryResultAudio = null;
    public ?InlineQueryResultContact $inlineQueryResultContact = null;
    public ?InlineQueryResultGame $inlineQueryResultGame = null;
    public ?InlineQueryResultDocument $inlineQueryResultDocument = null;
    public ?InlineQueryResultGif $inlineQueryResultGif = null;
    public ?InlineQueryResultLocation $inlineQueryResultLocation = null;
    public ?InlineQueryResultMpeg4Gif $inlineQueryResultMpeg4Gif = null;
    public ?InlineQueryResultPhoto $inlineQueryResultPhoto = null;
    public ?InlineQueryResultVenue $inlineQueryResultVenue = null;
    public ?InlineQueryResultVideo $inlineQueryResultVideo = null;
    public ?InlineQueryResultVoice $inlineQueryResultVoice = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create InlineQueryResultCachedAudio
        try {
            $inlineQueryResultCachedAudio = new InlineQueryResultCachedAudio($data);
            $successfulType = 'InlineQueryResultCachedAudio';
            $successfulObject = $inlineQueryResultCachedAudio;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedAudio'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedDocument
        try {
            $inlineQueryResultCachedDocument = new InlineQueryResultCachedDocument($data);
            $successfulType = 'InlineQueryResultCachedDocument';
            $successfulObject = $inlineQueryResultCachedDocument;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedDocument'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedGif
        try {
            $inlineQueryResultCachedGif = new InlineQueryResultCachedGif($data);
            $successfulType = 'InlineQueryResultCachedGif';
            $successfulObject = $inlineQueryResultCachedGif;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedGif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedMpeg4Gif
        try {
            $inlineQueryResultCachedMpeg4Gif = new InlineQueryResultCachedMpeg4Gif($data);
            $successfulType = 'InlineQueryResultCachedMpeg4Gif';
            $successfulObject = $inlineQueryResultCachedMpeg4Gif;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedMpeg4Gif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedPhoto
        try {
            $inlineQueryResultCachedPhoto = new InlineQueryResultCachedPhoto($data);
            $successfulType = 'InlineQueryResultCachedPhoto';
            $successfulObject = $inlineQueryResultCachedPhoto;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedPhoto'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedSticker
        try {
            $inlineQueryResultCachedSticker = new InlineQueryResultCachedSticker($data);
            $successfulType = 'InlineQueryResultCachedSticker';
            $successfulObject = $inlineQueryResultCachedSticker;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedSticker'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedVideo
        try {
            $inlineQueryResultCachedVideo = new InlineQueryResultCachedVideo($data);
            $successfulType = 'InlineQueryResultCachedVideo';
            $successfulObject = $inlineQueryResultCachedVideo;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedVideo'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedVoice
        try {
            $inlineQueryResultCachedVoice = new InlineQueryResultCachedVoice($data);
            $successfulType = 'InlineQueryResultCachedVoice';
            $successfulObject = $inlineQueryResultCachedVoice;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultCachedVoice'] = $e->getMessage();
        }

        // Try to create InlineQueryResultArticle
        try {
            $inlineQueryResultArticle = new InlineQueryResultArticle($data);
            $successfulType = 'InlineQueryResultArticle';
            $successfulObject = $inlineQueryResultArticle;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultArticle'] = $e->getMessage();
        }

        // Try to create InlineQueryResultAudio
        try {
            $inlineQueryResultAudio = new InlineQueryResultAudio($data);
            $successfulType = 'InlineQueryResultAudio';
            $successfulObject = $inlineQueryResultAudio;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultAudio'] = $e->getMessage();
        }

        // Try to create InlineQueryResultContact
        try {
            $inlineQueryResultContact = new InlineQueryResultContact($data);
            $successfulType = 'InlineQueryResultContact';
            $successfulObject = $inlineQueryResultContact;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultContact'] = $e->getMessage();
        }

        // Try to create InlineQueryResultGame
        try {
            $inlineQueryResultGame = new InlineQueryResultGame($data);
            $successfulType = 'InlineQueryResultGame';
            $successfulObject = $inlineQueryResultGame;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultGame'] = $e->getMessage();
        }

        // Try to create InlineQueryResultDocument
        try {
            $inlineQueryResultDocument = new InlineQueryResultDocument($data);
            $successfulType = 'InlineQueryResultDocument';
            $successfulObject = $inlineQueryResultDocument;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultDocument'] = $e->getMessage();
        }

        // Try to create InlineQueryResultGif
        try {
            $inlineQueryResultGif = new InlineQueryResultGif($data);
            $successfulType = 'InlineQueryResultGif';
            $successfulObject = $inlineQueryResultGif;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultGif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultLocation
        try {
            $inlineQueryResultLocation = new InlineQueryResultLocation($data);
            $successfulType = 'InlineQueryResultLocation';
            $successfulObject = $inlineQueryResultLocation;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultLocation'] = $e->getMessage();
        }

        // Try to create InlineQueryResultMpeg4Gif
        try {
            $inlineQueryResultMpeg4Gif = new InlineQueryResultMpeg4Gif($data);
            $successfulType = 'InlineQueryResultMpeg4Gif';
            $successfulObject = $inlineQueryResultMpeg4Gif;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultMpeg4Gif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultPhoto
        try {
            $inlineQueryResultPhoto = new InlineQueryResultPhoto($data);
            $successfulType = 'InlineQueryResultPhoto';
            $successfulObject = $inlineQueryResultPhoto;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultPhoto'] = $e->getMessage();
        }

        // Try to create InlineQueryResultVenue
        try {
            $inlineQueryResultVenue = new InlineQueryResultVenue($data);
            $successfulType = 'InlineQueryResultVenue';
            $successfulObject = $inlineQueryResultVenue;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultVenue'] = $e->getMessage();
        }

        // Try to create InlineQueryResultVideo
        try {
            $inlineQueryResultVideo = new InlineQueryResultVideo($data);
            $successfulType = 'InlineQueryResultVideo';
            $successfulObject = $inlineQueryResultVideo;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultVideo'] = $e->getMessage();
        }

        // Try to create InlineQueryResultVoice
        try {
            $inlineQueryResultVoice = new InlineQueryResultVoice($data);
            $successfulType = 'InlineQueryResultVoice';
            $successfulObject = $inlineQueryResultVoice;
            break;
        } catch (Exception $e) {
            $errors['InlineQueryResultVoice'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for InlineQueryResult. Errors: ' . json_encode($errors));
        }
        
        // Set the successful object
        switch ($successfulType) {
            case 'InlineQueryResultCachedAudio':
                $this->inlineQueryResultCachedAudio = $successfulObject;
                break;
            case 'InlineQueryResultCachedDocument':
                $this->inlineQueryResultCachedDocument = $successfulObject;
                break;
            case 'InlineQueryResultCachedGif':
                $this->inlineQueryResultCachedGif = $successfulObject;
                break;
            case 'InlineQueryResultCachedMpeg4Gif':
                $this->inlineQueryResultCachedMpeg4Gif = $successfulObject;
                break;
            case 'InlineQueryResultCachedPhoto':
                $this->inlineQueryResultCachedPhoto = $successfulObject;
                break;
            case 'InlineQueryResultCachedSticker':
                $this->inlineQueryResultCachedSticker = $successfulObject;
                break;
            case 'InlineQueryResultCachedVideo':
                $this->inlineQueryResultCachedVideo = $successfulObject;
                break;
            case 'InlineQueryResultCachedVoice':
                $this->inlineQueryResultCachedVoice = $successfulObject;
                break;
            case 'InlineQueryResultArticle':
                $this->inlineQueryResultArticle = $successfulObject;
                break;
            case 'InlineQueryResultAudio':
                $this->inlineQueryResultAudio = $successfulObject;
                break;
            case 'InlineQueryResultContact':
                $this->inlineQueryResultContact = $successfulObject;
                break;
            case 'InlineQueryResultGame':
                $this->inlineQueryResultGame = $successfulObject;
                break;
            case 'InlineQueryResultDocument':
                $this->inlineQueryResultDocument = $successfulObject;
                break;
            case 'InlineQueryResultGif':
                $this->inlineQueryResultGif = $successfulObject;
                break;
            case 'InlineQueryResultLocation':
                $this->inlineQueryResultLocation = $successfulObject;
                break;
            case 'InlineQueryResultMpeg4Gif':
                $this->inlineQueryResultMpeg4Gif = $successfulObject;
                break;
            case 'InlineQueryResultPhoto':
                $this->inlineQueryResultPhoto = $successfulObject;
                break;
            case 'InlineQueryResultVenue':
                $this->inlineQueryResultVenue = $successfulObject;
                break;
            case 'InlineQueryResultVideo':
                $this->inlineQueryResultVideo = $successfulObject;
                break;
            case 'InlineQueryResultVoice':
                $this->inlineQueryResultVoice = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}