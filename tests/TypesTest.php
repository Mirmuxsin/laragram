<?php

use PHPUnit\Framework\TestCase;
use Milly\Laragram\Types\Update;
use Milly\Laragram\Types\Message;
use Milly\Laragram\Types\User;
use Milly\Laragram\Types\Chat;
use Milly\Laragram\Types\CallbackQuery;
use Milly\Laragram\Types\InlineQuery;
use Milly\Laragram\Types\Contact;
use Milly\Laragram\Types\Location;
use Milly\Laragram\Types\Document;
use Milly\Laragram\Types\PhotoSize;
use Milly\Laragram\Types\Audio;
use Milly\Laragram\Types\Video;
use Milly\Laragram\Types\Voice;
use Milly\Laragram\Types\Sticker;
use Milly\Laragram\Types\Animation;
use Milly\Laragram\Types\VideoNote;
use Milly\Laragram\Types\Dice;
use Milly\Laragram\Types\Poll;
use Milly\Laragram\Types\Venue;
use Milly\Laragram\Types\Game;
use Milly\Laragram\Types\Invoice;
use Milly\Laragram\Types\SuccessfulPayment;
use Milly\Laragram\Types\InlineKeyboardMarkup;
use Milly\Laragram\Types\InlineKeyboardButton;

class TypesTest extends TestCase
{
    /**
     * Test data factory for creating mock Telegram data
     */
    private function createMockUpdateData(array $overrides = []): array
    {
        $defaults = [
            'update_id' => 123,
            'message' => [
                'message_id' => 1,
                'from' => [
                    'id' => 123456789,
                    'is_bot' => false,
                    'first_name' => 'Test User',
                    'last_name' => 'Test Last',
                    'username' => 'testuser',
                    'language_code' => 'en'
                ],
                'chat' => [
                    'id' => 123456789,
                    'type' => 'private',
                    'title' => 'Test Chat',
                    'username' => 'testchat',
                    'first_name' => 'Test User',
                    'last_name' => 'Test Last'
                ],
                'date' => time(),
                'text' => 'Hello World'
            ]
        ];

        return array_merge($defaults, $overrides);
    }

    private function createMockCallbackQueryData(array $overrides = []): array
    {
        $defaults = [
            'update_id' => 124,
            'callback_query' => [
                'id' => 'callback_id',
                'from' => [
                    'id' => 123456789,
                    'is_bot' => false,
                    'first_name' => 'Test User'
                ],
                'message' => [
                    'message_id' => 1,
                    'chat' => [
                        'id' => 123456789,
                        'type' => 'private'
                    ],
                    'date' => time(),
                    'text' => 'Original message'
                ],
                'chat_instance' => 'chat_instance_id',
                'data' => 'callback_data'
            ]
        ];

        return array_merge($defaults, $overrides);
    }

    private function createMockInlineQueryData(array $overrides = []): array
    {
        $defaults = [
            'update_id' => 125,
            'inline_query' => [
                'id' => 'inline_query_id',
                'from' => [
                    'id' => 123456789,
                    'is_bot' => false,
                    'first_name' => 'Test User'
                ],
                'query' => 'test query',
                'offset' => '0'
            ]
        ];

        return array_merge($defaults, $overrides);
    }

    /** @test */
    public function update_can_be_constructed_with_data()
    {
        // Skip this test as it requires Laravel request context
        $this->markTestSkipped('Update constructor requires Laravel request context via Handler::get()');
    }

    /** @test */
    public function message_can_be_constructed_with_data()
    {
        $data = [
            'message_id' => 1,
            'from' => [
                'id' => 123456789,
                'is_bot' => false,
                'first_name' => 'Test User',
                'last_name' => 'Test Last',
                'username' => 'testuser'
            ],
            'chat' => [
                'id' => 123456789,
                'type' => 'private',
                'title' => 'Test Chat'
            ],
            'date' => time(),
            'text' => 'Hello World'
        ];

        $message = new Message($data);
        
        $this->assertEquals(1, $message->message_id);
        $this->assertInstanceOf(User::class, $message->from);
        $this->assertInstanceOf(Chat::class, $message->chat);
        $this->assertEquals('Hello World', $message->text);
        $this->assertEquals(123456789, $message->from->id);
        $this->assertEquals('Test User', $message->from->first_name);
        $this->assertEquals('Test Last', $message->from->last_name);
        $this->assertEquals('testuser', $message->from->username);
    }

    /** @test */
    public function message_handles_optional_fields()
    {
        $data = [
            'message_id' => 1,
            'chat' => [
                'id' => 123456789,
                'type' => 'private'
            ],
            'date' => time(),
            'text' => 'Hello World'
        ];

        $message = new Message($data);
        
        $this->assertEquals(1, $message->message_id);
        $this->assertNull($message->from);
        $this->assertEquals('Hello World', $message->text);
        $this->assertNull($message->reply_to_message);
        $this->assertNull($message->photo);
        $this->assertNull($message->document);
        $this->assertNull($message->audio);
        $this->assertNull($message->video);
    }

    /** @test */
    public function user_can_be_constructed_with_data()
    {
        $data = [
            'id' => 123456789,
            'is_bot' => false,
            'first_name' => 'Test User',
            'last_name' => 'Test Last',
            'username' => 'testuser',
            'language_code' => 'en'
        ];

        $user = new User($data);
        
        $this->assertEquals(123456789, $user->id);
        $this->assertFalse($user->is_bot);
        $this->assertEquals('Test User', $user->first_name);
        $this->assertEquals('Test Last', $user->last_name);
        $this->assertEquals('testuser', $user->username);
        $this->assertEquals('en', $user->language_code);
    }

    /** @test */
    public function user_handles_optional_fields()
    {
        $data = [
            'id' => 123456789,
            'is_bot' => false,
            'first_name' => 'Test User'
        ];

        $user = new User($data);
        
        $this->assertEquals(123456789, $user->id);
        $this->assertFalse($user->is_bot);
        $this->assertEquals('Test User', $user->first_name);
        $this->assertNull($user->last_name);
        $this->assertNull($user->username);
        $this->assertNull($user->language_code);
    }

    /** @test */
    public function chat_can_be_constructed_with_data()
    {
        $data = [
            'id' => 123456789,
            'type' => 'private',
            'title' => 'Test Chat',
            'username' => 'testchat',
            'first_name' => 'Test User',
            'last_name' => 'Test Last'
        ];

        $chat = new Chat($data);
        
        $this->assertEquals(123456789, $chat->id);
        $this->assertEquals('private', $chat->type);
        $this->assertEquals('Test Chat', $chat->title);
        $this->assertEquals('testchat', $chat->username);
        $this->assertEquals('Test User', $chat->first_name);
        $this->assertEquals('Test Last', $chat->last_name);
    }

    /** @test */
    public function chat_handles_different_types()
    {
        $privateData = [
            'id' => 123456789,
            'type' => 'private',
            'first_name' => 'Test User'
        ];

        $groupData = [
            'id' => -987654321,
            'type' => 'group',
            'title' => 'Test Group'
        ];

        $channelData = [
            'id' => -100123456789,
            'type' => 'channel',
            'title' => 'Test Channel',
            'username' => 'testchannel'
        ];

        $privateChat = new Chat($privateData);
        $groupChat = new Chat($groupData);
        $channelChat = new Chat($channelData);

        $this->assertEquals('private', $privateChat->type);
        $this->assertEquals('Test User', $privateChat->first_name);

        $this->assertEquals('group', $groupChat->type);
        $this->assertEquals('Test Group', $groupChat->title);

        $this->assertEquals('channel', $channelChat->type);
        $this->assertEquals('Test Channel', $channelChat->title);
        $this->assertEquals('testchannel', $channelChat->username);
    }

    /** @test */
    public function callback_query_can_be_constructed_with_data()
    {
        $data = [
            'id' => 'callback_id',
            'from' => [
                'id' => 123456789,
                'is_bot' => false,
                'first_name' => 'Test User'
            ],
            'message' => [
                'message_id' => 1,
                'chat' => [
                    'id' => 123456789,
                    'type' => 'private'
                ],
                'date' => time(),
                'text' => 'Original message'
            ],
            'chat_instance' => 'chat_instance_id',
            'data' => 'callback_data'
        ];

        $callbackQuery = new CallbackQuery($data);
        
        $this->assertEquals('callback_id', $callbackQuery->id);
        $this->assertInstanceOf(User::class, $callbackQuery->from);
        $this->assertInstanceOf(\Milly\Laragram\Types\MaybeInaccessibleMessage::class, $callbackQuery->message);
        $this->assertEquals('chat_instance_id', $callbackQuery->chat_instance);
        $this->assertEquals('callback_data', $callbackQuery->data);
        
        // Test that the MaybeInaccessibleMessage correctly identified it as a Message
        $this->assertEquals('Message', $callbackQuery->message->type);
        $this->assertInstanceOf(Message::class, $callbackQuery->message->message);
        $this->assertNull($callbackQuery->message->inaccessibleMessage);
    }

    /** @test */
    public function callback_query_handles_optional_fields()
    {
        $data = [
            'id' => 'callback_id',
            'from' => [
                'id' => 123456789,
                'is_bot' => false,
                'first_name' => 'Test User'
            ],
            'chat_instance' => 'chat_instance_id'
        ];

        $callbackQuery = new CallbackQuery($data);
        
        $this->assertEquals('callback_id', $callbackQuery->id);
        $this->assertInstanceOf(User::class, $callbackQuery->from);
        $this->assertNull($callbackQuery->message);
        $this->assertNull($callbackQuery->inline_message_id);
        $this->assertNull($callbackQuery->data);
    }

    /** @test */
    public function inline_query_can_be_constructed_with_data()
    {
        $data = [
            'id' => 'inline_query_id',
            'from' => [
                'id' => 123456789,
                'is_bot' => false,
                'first_name' => 'Test User'
            ],
            'query' => 'test query',
            'offset' => '0'
        ];

        $inlineQuery = new InlineQuery($data);
        
        $this->assertEquals('inline_query_id', $inlineQuery->id);
        $this->assertInstanceOf(User::class, $inlineQuery->from);
        $this->assertEquals('test query', $inlineQuery->query);
        $this->assertEquals('0', $inlineQuery->offset);
    }

    /** @test */
    public function contact_can_be_constructed_with_data()
    {
        $data = [
            'phone_number' => '+1234567890',
            'first_name' => 'Test Contact',
            'last_name' => 'Test Last',
            'user_id' => 123456789
        ];

        $contact = new Contact($data);
        
        $this->assertEquals('+1234567890', $contact->phone_number);
        $this->assertEquals('Test Contact', $contact->first_name);
        $this->assertEquals('Test Last', $contact->last_name);
        $this->assertEquals(123456789, $contact->user_id);
    }

    /** @test */
    public function location_can_be_constructed_with_data()
    {
        $data = [
            'longitude' => 12.345678,
            'latitude' => 98.765432
        ];

        $location = new Location($data);
        
        $this->assertEquals(12.345678, $location->longitude);
        $this->assertEquals(98.765432, $location->latitude);
    }

    /** @test */
    public function document_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'document_file_id',
            'file_unique_id' => 'document_unique_id',
            'file_name' => 'test_document.pdf',
            'mime_type' => 'application/pdf',
            'file_size' => 1024
        ];

        $document = new Document($data);
        
        $this->assertEquals('document_file_id', $document->file_id);
        $this->assertEquals('document_unique_id', $document->file_unique_id);
        $this->assertEquals('test_document.pdf', $document->file_name);
        $this->assertEquals('application/pdf', $document->mime_type);
        $this->assertEquals(1024, $document->file_size);
    }

    /** @test */
    public function photo_size_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'photo_file_id',
            'file_unique_id' => 'photo_unique_id',
            'width' => 1920,
            'height' => 1080,
            'file_size' => 2048
        ];

        $photoSize = new PhotoSize($data);
        
        $this->assertEquals('photo_file_id', $photoSize->file_id);
        $this->assertEquals('photo_unique_id', $photoSize->file_unique_id);
        $this->assertEquals(1920, $photoSize->width);
        $this->assertEquals(1080, $photoSize->height);
        $this->assertEquals(2048, $photoSize->file_size);
    }

    /** @test */
    public function audio_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'audio_file_id',
            'file_unique_id' => 'audio_unique_id',
            'duration' => 180,
            'performer' => 'Test Performer',
            'title' => 'Test Title',
            'mime_type' => 'audio/mpeg',
            'file_size' => 4096
        ];

        $audio = new Audio($data);
        
        $this->assertEquals('audio_file_id', $audio->file_id);
        $this->assertEquals('audio_unique_id', $audio->file_unique_id);
        $this->assertEquals(180, $audio->duration);
        $this->assertEquals('Test Performer', $audio->performer);
        $this->assertEquals('Test Title', $audio->title);
        $this->assertEquals('audio/mpeg', $audio->mime_type);
        $this->assertEquals(4096, $audio->file_size);
    }

    /** @test */
    public function video_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'video_file_id',
            'file_unique_id' => 'video_unique_id',
            'width' => 1920,
            'height' => 1080,
            'duration' => 60,
            'mime_type' => 'video/mp4',
            'file_size' => 8192
        ];

        $video = new Video($data);
        
        $this->assertEquals('video_file_id', $video->file_id);
        $this->assertEquals('video_unique_id', $video->file_unique_id);
        $this->assertEquals(1920, $video->width);
        $this->assertEquals(1080, $video->height);
        $this->assertEquals(60, $video->duration);
        $this->assertEquals('video/mp4', $video->mime_type);
        $this->assertEquals(8192, $video->file_size);
    }

    /** @test */
    public function voice_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'voice_file_id',
            'file_unique_id' => 'voice_unique_id',
            'duration' => 30,
            'mime_type' => 'audio/ogg',
            'file_size' => 2048
        ];

        $voice = new Voice($data);
        
        $this->assertEquals('voice_file_id', $voice->file_id);
        $this->assertEquals('voice_unique_id', $voice->file_unique_id);
        $this->assertEquals(30, $voice->duration);
        $this->assertEquals('audio/ogg', $voice->mime_type);
        $this->assertEquals(2048, $voice->file_size);
    }

    /** @test */
    public function sticker_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'sticker_file_id',
            'file_unique_id' => 'sticker_unique_id',
            'type' => 'regular',
            'width' => 512,
            'height' => 512,
            'is_animated' => false,
            'is_video' => false,
            'file_size' => 1024
        ];

        $sticker = new Sticker($data);
        
        $this->assertEquals('sticker_file_id', $sticker->file_id);
        $this->assertEquals('sticker_unique_id', $sticker->file_unique_id);
        $this->assertEquals('regular', $sticker->type);
        $this->assertEquals(512, $sticker->width);
        $this->assertEquals(512, $sticker->height);
        $this->assertFalse($sticker->is_animated);
        $this->assertFalse($sticker->is_video);
        $this->assertEquals(1024, $sticker->file_size);
    }

    /** @test */
    public function animation_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'animation_file_id',
            'file_unique_id' => 'animation_unique_id',
            'width' => 480,
            'height' => 480,
            'duration' => 5,
            'file_name' => 'test_animation.gif',
            'mime_type' => 'image/gif',
            'file_size' => 3072
        ];

        $animation = new Animation($data);
        
        $this->assertEquals('animation_file_id', $animation->file_id);
        $this->assertEquals('animation_unique_id', $animation->file_unique_id);
        $this->assertEquals(480, $animation->width);
        $this->assertEquals(480, $animation->height);
        $this->assertEquals(5, $animation->duration);
        $this->assertEquals('test_animation.gif', $animation->file_name);
        $this->assertEquals('image/gif', $animation->mime_type);
        $this->assertEquals(3072, $animation->file_size);
    }

    /** @test */
    public function video_note_can_be_constructed_with_data()
    {
        $data = [
            'file_id' => 'video_note_file_id',
            'file_unique_id' => 'video_note_unique_id',
            'length' => 240,
            'duration' => 15,
            'file_size' => 1536
        ];

        $videoNote = new VideoNote($data);
        
        $this->assertEquals('video_note_file_id', $videoNote->file_id);
        $this->assertEquals('video_note_unique_id', $videoNote->file_unique_id);
        $this->assertEquals(240, $videoNote->length);
        $this->assertEquals(15, $videoNote->duration);
        $this->assertEquals(1536, $videoNote->file_size);
    }

    /** @test */
    public function dice_can_be_constructed_with_data()
    {
        $data = [
            'emoji' => '🎲',
            'value' => 6
        ];

        $dice = new Dice($data);
        
        $this->assertEquals('🎲', $dice->emoji);
        $this->assertEquals(6, $dice->value);
    }

    /** @test */
    public function poll_can_be_constructed_with_data()
    {
        $data = [
            'id' => 'poll_id',
            'question' => 'Test Question?',
            'options' => [
                ['text' => 'Option 1', 'voter_count' => 5],
                ['text' => 'Option 2', 'voter_count' => 3]
            ],
            'total_voter_count' => 8,
            'is_closed' => false,
            'is_anonymous' => true,
            'type' => 'regular',
            'allows_multiple_answers' => false
        ];

        $poll = new Poll($data);
        
        $this->assertEquals('poll_id', $poll->id);
        $this->assertEquals('Test Question?', $poll->question);
        $this->assertIsArray($poll->options);
        $this->assertEquals(2, count($poll->options));
        $this->assertEquals(8, $poll->total_voter_count);
        $this->assertFalse($poll->is_closed);
        $this->assertTrue($poll->is_anonymous);
        $this->assertEquals('regular', $poll->type);
        $this->assertFalse($poll->allows_multiple_answers);
    }

    /** @test */
    public function venue_can_be_constructed_with_data()
    {
        $data = [
            'location' => [
                'longitude' => 12.345678,
                'latitude' => 98.765432
            ],
            'title' => 'Test Venue',
            'address' => '123 Test Street',
            'foursquare_id' => 'foursquare_id',
            'foursquare_type' => 'restaurant',
            'google_place_id' => 'google_place_id',
            'google_place_type' => 'restaurant'
        ];

        $venue = new Venue($data);
        
        $this->assertInstanceOf(Location::class, $venue->location);
        $this->assertEquals(12.345678, $venue->location->longitude);
        $this->assertEquals(98.765432, $venue->location->latitude);
        $this->assertEquals('Test Venue', $venue->title);
        $this->assertEquals('123 Test Street', $venue->address);
        $this->assertEquals('foursquare_id', $venue->foursquare_id);
        $this->assertEquals('restaurant', $venue->foursquare_type);
        $this->assertEquals('google_place_id', $venue->google_place_id);
        $this->assertEquals('restaurant', $venue->google_place_type);
    }

    /** @test */
    public function game_can_be_constructed_with_data()
    {
        $data = [
            'title' => 'Test Game',
            'description' => 'A test game',
            'photo' => [
                [
                    'file_id' => 'photo_file_id',
                    'file_unique_id' => 'photo_unique_id',
                    'width' => 640,
                    'height' => 480
                ]
            ]
        ];

        $game = new Game($data);
        
        $this->assertEquals('Test Game', $game->title);
        $this->assertEquals('A test game', $game->description);
        $this->assertIsArray($game->photo);
        $this->assertEquals(1, count($game->photo));
    }

    /** @test */
    public function invoice_can_be_constructed_with_data()
    {
        $data = [
            'title' => 'Test Invoice',
            'description' => 'Test Description',
            'start_parameter' => 'start_param',
            'currency' => 'USD',
            'total_amount' => 1000
        ];

        $invoice = new Invoice($data);
        
        $this->assertEquals('Test Invoice', $invoice->title);
        $this->assertEquals('Test Description', $invoice->description);
        $this->assertEquals('start_param', $invoice->start_parameter);
        $this->assertEquals('USD', $invoice->currency);
        $this->assertEquals(1000, $invoice->total_amount);
    }

    /** @test */
    public function successful_payment_can_be_constructed_with_data()
    {
        $data = [
            'currency' => 'USD',
            'total_amount' => 1000,
            'invoice_payload' => 'invoice_payload',
            'telegram_payment_charge_id' => 'telegram_charge_id',
            'provider_payment_charge_id' => 'provider_charge_id'
        ];

        $payment = new SuccessfulPayment($data);
        
        $this->assertEquals('USD', $payment->currency);
        $this->assertEquals(1000, $payment->total_amount);
        $this->assertEquals('invoice_payload', $payment->invoice_payload);
        $this->assertEquals('telegram_charge_id', $payment->telegram_payment_charge_id);
        $this->assertEquals('provider_charge_id', $payment->provider_payment_charge_id);
    }

    /** @test */
    public function inline_keyboard_markup_can_be_constructed_with_data()
    {
        $data = [
            'inline_keyboard' => [
                [
                    [
                        'text' => 'Button 1',
                        'callback_data' => 'data1'
                    ],
                    [
                        'text' => 'Button 2',
                        'url' => 'https://example.com'
                    ]
                ]
            ]
        ];

        $keyboard = new InlineKeyboardMarkup($data);
        
        $this->assertIsArray($keyboard->inline_keyboard);
        $this->assertEquals(1, count($keyboard->inline_keyboard));
        $this->assertEquals(2, count($keyboard->inline_keyboard[0]));
    }

    /** @test */
    public function inline_keyboard_button_can_be_constructed_with_data()
    {
        $data = [
            'text' => 'Test Button',
            'callback_data' => 'test_data'
        ];

        $button = new InlineKeyboardButton($data);
        
        $this->assertEquals('Test Button', $button->text);
        $this->assertEquals('test_data', $button->callback_data);
    }

    /** @test */
    public function types_handle_missing_optional_fields_gracefully()
    {
        $minimalData = [
            'message_id' => 1,
            'chat' => [
                'id' => 123456789,
                'type' => 'private'
            ],
            'date' => time(),
            'text' => 'Simple message'
        ];

        $message = new Message($minimalData);
        
        $this->assertEquals(1, $message->message_id);
        $this->assertNull($message->from);
        $this->assertNull($message->reply_to_message);
        $this->assertNull($message->photo);
        $this->assertNull($message->caption);
        $this->assertNull($message->entities);
        $this->assertNull($message->forward_from);
        $this->assertNull($message->forward_from_chat);
    }

    /** @test */
    public function types_create_nested_objects_correctly()
    {
        $data = [
            'message_id' => 1,
            'from' => [
                'id' => 123456789,
                'is_bot' => false,
                'first_name' => 'Test User',
                'last_name' => 'Test Last',
                'username' => 'testuser'
            ],
            'chat' => [
                'id' => 123456789,
                'type' => 'private',
                'title' => 'Test Chat',
                'username' => 'testchat'
            ],
            'date' => time(),
            'text' => 'Test message',
            'reply_to_message' => [
                'message_id' => 2,
                'chat' => [
                    'id' => 123456789,
                    'type' => 'private'
                ],
                'date' => time() - 60,
                'text' => 'Original message'
            ]
        ];

        $message = new Message($data);
        
        // Test nested User object
        $this->assertInstanceOf(User::class, $message->from);
        $this->assertEquals('Test User', $message->from->first_name);
        $this->assertEquals('testuser', $message->from->username);
        
        // Test nested Chat object
        $this->assertInstanceOf(Chat::class, $message->chat);
        $this->assertEquals('Test Chat', $message->chat->title);
        $this->assertEquals('testchat', $message->chat->username);
        
        // Test nested Message object
        $this->assertInstanceOf(Message::class, $message->reply_to_message);
        $this->assertEquals(2, $message->reply_to_message->message_id);
        $this->assertEquals('Original message', $message->reply_to_message->text);
    }

    /** @test */
    public function types_handle_different_chat_types()
    {
        $privateChat = new Chat([
            'id' => 123456789,
            'type' => 'private',
            'first_name' => 'Test User'
        ]);

        $groupChat = new Chat([
            'id' => -987654321,
            'type' => 'group',
            'title' => 'Test Group'
        ]);

        $supergroupChat = new Chat([
            'id' => -100123456789,
            'type' => 'supergroup',
            'title' => 'Test Supergroup',
            'username' => 'testsupergroup'
        ]);

        $channelChat = new Chat([
            'id' => -100987654321,
            'type' => 'channel',
            'title' => 'Test Channel',
            'username' => 'testchannel'
        ]);

        $this->assertEquals('private', $privateChat->type);
        $this->assertEquals('Test User', $privateChat->first_name);

        $this->assertEquals('group', $groupChat->type);
        $this->assertEquals('Test Group', $groupChat->title);

        $this->assertEquals('supergroup', $supergroupChat->type);
        $this->assertEquals('Test Supergroup', $supergroupChat->title);
        $this->assertEquals('testsupergroup', $supergroupChat->username);

        $this->assertEquals('channel', $channelChat->type);
        $this->assertEquals('Test Channel', $channelChat->title);
        $this->assertEquals('testchannel', $channelChat->username);
    }

    /** @test */
    public function maybe_inaccessible_message_handles_regular_message()
    {
        $data = [
            'message_id' => 1,
            'chat' => [
                'id' => 123456789,
                'type' => 'private'
            ],
            'date' => time(),
            'text' => 'Hello World'
        ];

        $maybeMessage = new \Milly\Laragram\Types\MaybeInaccessibleMessage($data);
        
        $this->assertEquals('Message', $maybeMessage->type);
        $this->assertInstanceOf(Message::class, $maybeMessage->message);
        $this->assertNull($maybeMessage->inaccessibleMessage);
        $this->assertEquals('Hello World', $maybeMessage->message->text);
    }

    /** @test */
    public function maybe_inaccessible_message_handles_inaccessible_message()
    {
        $data = [
            'message_id' => 1,
            'chat' => [
                'id' => 123456789,
                'type' => 'private'
            ],
            'date' => 0  // InaccessibleMessage always has date = 0
        ];

        $maybeMessage = new \Milly\Laragram\Types\MaybeInaccessibleMessage($data);
        
        $this->assertEquals('InaccessibleMessage', $maybeMessage->type);
        $this->assertInstanceOf(\Milly\Laragram\Types\InaccessibleMessage::class, $maybeMessage->inaccessibleMessage);
        $this->assertNull($maybeMessage->message);
        $this->assertEquals(1, $maybeMessage->inaccessibleMessage->message_id);
        $this->assertEquals(0, $maybeMessage->inaccessibleMessage->date);
    }

    /** @test */
    public function inaccessible_message_can_be_constructed_with_data()
    {
        $data = [
            'message_id' => 123,
            'chat' => [
                'id' => 123456789,
                'type' => 'private'
            ],
            'date' => 0
        ];

        $inaccessibleMessage = new \Milly\Laragram\Types\InaccessibleMessage($data);
        
        $this->assertEquals(123, $inaccessibleMessage->message_id);
        $this->assertInstanceOf(Chat::class, $inaccessibleMessage->chat);
        $this->assertEquals(0, $inaccessibleMessage->date);
    }
}