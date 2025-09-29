<?php

namespace Milly\Laragram\Types;

/**
* InlineQueryResult
 *
 *<p>This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:</p><p>* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcachedaudio">InlineQueryResultCachedAudio</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcacheddocument">InlineQueryResultCachedDocument</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcachedgif">InlineQueryResultCachedGif</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcachedmpeg4gif">InlineQueryResultCachedMpeg4Gif</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcachedphoto">InlineQueryResultCachedPhoto</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcachedsticker">InlineQueryResultCachedSticker</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcachedvideo">InlineQueryResultCachedVideo</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcachedvoice">InlineQueryResultCachedVoice</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultarticle">InlineQueryResultArticle</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultaudio">InlineQueryResultAudio</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultcontact">InlineQueryResultContact</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultgame">InlineQueryResultGame</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultdocument">InlineQueryResultDocument</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultgif">InlineQueryResultGif</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultlocation">InlineQueryResultLocation</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultmpeg4gif">InlineQueryResultMpeg4Gif</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultphoto">InlineQueryResultPhoto</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultvenue">InlineQueryResultVenue</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultvideo">InlineQueryResultVideo</a>
* <a href="https://core.telegram.org/bots/api/#inlinequeryresultvoice">InlineQueryResultVoice</a></p>
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
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedAudio'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedDocument
        try {
            $inlineQueryResultCachedDocument = new InlineQueryResultCachedDocument($data);
            $successfulType = 'InlineQueryResultCachedDocument';
            $successfulObject = $inlineQueryResultCachedDocument;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedDocument'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedGif
        try {
            $inlineQueryResultCachedGif = new InlineQueryResultCachedGif($data);
            $successfulType = 'InlineQueryResultCachedGif';
            $successfulObject = $inlineQueryResultCachedGif;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedGif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedMpeg4Gif
        try {
            $inlineQueryResultCachedMpeg4Gif = new InlineQueryResultCachedMpeg4Gif($data);
            $successfulType = 'InlineQueryResultCachedMpeg4Gif';
            $successfulObject = $inlineQueryResultCachedMpeg4Gif;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedMpeg4Gif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedPhoto
        try {
            $inlineQueryResultCachedPhoto = new InlineQueryResultCachedPhoto($data);
            $successfulType = 'InlineQueryResultCachedPhoto';
            $successfulObject = $inlineQueryResultCachedPhoto;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedPhoto'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedSticker
        try {
            $inlineQueryResultCachedSticker = new InlineQueryResultCachedSticker($data);
            $successfulType = 'InlineQueryResultCachedSticker';
            $successfulObject = $inlineQueryResultCachedSticker;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedSticker'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedVideo
        try {
            $inlineQueryResultCachedVideo = new InlineQueryResultCachedVideo($data);
            $successfulType = 'InlineQueryResultCachedVideo';
            $successfulObject = $inlineQueryResultCachedVideo;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedVideo'] = $e->getMessage();
        }

        // Try to create InlineQueryResultCachedVoice
        try {
            $inlineQueryResultCachedVoice = new InlineQueryResultCachedVoice($data);
            $successfulType = 'InlineQueryResultCachedVoice';
            $successfulObject = $inlineQueryResultCachedVoice;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultCachedVoice'] = $e->getMessage();
        }

        // Try to create InlineQueryResultArticle
        try {
            $inlineQueryResultArticle = new InlineQueryResultArticle($data);
            $successfulType = 'InlineQueryResultArticle';
            $successfulObject = $inlineQueryResultArticle;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultArticle'] = $e->getMessage();
        }

        // Try to create InlineQueryResultAudio
        try {
            $inlineQueryResultAudio = new InlineQueryResultAudio($data);
            $successfulType = 'InlineQueryResultAudio';
            $successfulObject = $inlineQueryResultAudio;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultAudio'] = $e->getMessage();
        }

        // Try to create InlineQueryResultContact
        try {
            $inlineQueryResultContact = new InlineQueryResultContact($data);
            $successfulType = 'InlineQueryResultContact';
            $successfulObject = $inlineQueryResultContact;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultContact'] = $e->getMessage();
        }

        // Try to create InlineQueryResultGame
        try {
            $inlineQueryResultGame = new InlineQueryResultGame($data);
            $successfulType = 'InlineQueryResultGame';
            $successfulObject = $inlineQueryResultGame;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultGame'] = $e->getMessage();
        }

        // Try to create InlineQueryResultDocument
        try {
            $inlineQueryResultDocument = new InlineQueryResultDocument($data);
            $successfulType = 'InlineQueryResultDocument';
            $successfulObject = $inlineQueryResultDocument;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultDocument'] = $e->getMessage();
        }

        // Try to create InlineQueryResultGif
        try {
            $inlineQueryResultGif = new InlineQueryResultGif($data);
            $successfulType = 'InlineQueryResultGif';
            $successfulObject = $inlineQueryResultGif;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultGif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultLocation
        try {
            $inlineQueryResultLocation = new InlineQueryResultLocation($data);
            $successfulType = 'InlineQueryResultLocation';
            $successfulObject = $inlineQueryResultLocation;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultLocation'] = $e->getMessage();
        }

        // Try to create InlineQueryResultMpeg4Gif
        try {
            $inlineQueryResultMpeg4Gif = new InlineQueryResultMpeg4Gif($data);
            $successfulType = 'InlineQueryResultMpeg4Gif';
            $successfulObject = $inlineQueryResultMpeg4Gif;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultMpeg4Gif'] = $e->getMessage();
        }

        // Try to create InlineQueryResultPhoto
        try {
            $inlineQueryResultPhoto = new InlineQueryResultPhoto($data);
            $successfulType = 'InlineQueryResultPhoto';
            $successfulObject = $inlineQueryResultPhoto;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultPhoto'] = $e->getMessage();
        }

        // Try to create InlineQueryResultVenue
        try {
            $inlineQueryResultVenue = new InlineQueryResultVenue($data);
            $successfulType = 'InlineQueryResultVenue';
            $successfulObject = $inlineQueryResultVenue;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultVenue'] = $e->getMessage();
        }

        // Try to create InlineQueryResultVideo
        try {
            $inlineQueryResultVideo = new InlineQueryResultVideo($data);
            $successfulType = 'InlineQueryResultVideo';
            $successfulObject = $inlineQueryResultVideo;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultVideo'] = $e->getMessage();
        }

        // Try to create InlineQueryResultVoice
        try {
            $inlineQueryResultVoice = new InlineQueryResultVoice($data);
            $successfulType = 'InlineQueryResultVoice';
            $successfulObject = $inlineQueryResultVoice;
            goto success;
        } catch (\Exception $e) {
            $errors['InlineQueryResultVoice'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for InlineQueryResult. Errors: ' . json_encode($errors));
        }
        
        success:
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