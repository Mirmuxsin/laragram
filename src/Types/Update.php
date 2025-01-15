<?php

namespace Milly\Laragram\Types;

/**
* Update
 *
 *<p>*Optional*. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#update
 */
class Update
{
    /**
    * <p>The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using <a href="https://core.telegram.org/bots/api/#setwebhook">webhooks</a>, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.</p>
    * @var int
    */
    public int $update_id;

    /**
    * <p>*Optional*. New incoming message of any kind - text, photo, sticker, etc.</p>
    * @var Message|null
    */
    public ?Message $message = null;

    /**
    * <p>*Optional*. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.</p>
    * @var Message|null
    */
    public ?Message $edited_message = null;

    /**
    * <p>*Optional*. New incoming channel post of any kind - text, photo, sticker, etc.</p>
    * @var Message|null
    */
    public ?Message $channel_post = null;

    /**
    * <p>*Optional*. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.</p>
    * @var Message|null
    */
    public ?Message $edited_channel_post = null;

    /**
    * <p>*Optional*. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot</p>
    * @var BusinessConnection|null
    */
    public ?BusinessConnection $business_connection = null;

    /**
    * <p>*Optional*. New message from a connected business account</p>
    * @var Message|null
    */
    public ?Message $business_message = null;

    /**
    * <p>*Optional*. New version of a message from a connected business account</p>
    * @var Message|null
    */
    public ?Message $edited_business_message = null;

    /**
    * <p>*Optional*. Messages were deleted from a connected business account</p>
    * @var BusinessMessagesDeleted|null
    */
    public ?BusinessMessagesDeleted $deleted_business_messages = null;

    /**
    * <p>*Optional*. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify `"message<em>reaction"` in the list of *allowed\</em>updates* to receive these updates. The update isn't received for reactions set by bots.</p>
    * @var MessageReactionUpdated|null
    */
    public ?MessageReactionUpdated $message_reaction = null;

    /**
    * <p>*Optional*. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify `"message<em>reaction</em>count"` in the list of *allowed\_updates* to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.</p>
    * @var MessageReactionCountUpdated|null
    */
    public ?MessageReactionCountUpdated $message_reaction_count = null;

    /**
    * <p>*Optional*. New incoming <a href="https://core.telegram.org/bots/api/#inline-mode">inline</a> query</p>
    * @var InlineQuery|null
    */
    public ?InlineQuery $inline_query = null;

    /**
    * <p>*Optional*. The result of an <a href="https://core.telegram.org/bots/api/#inline-mode">inline</a> query that was chosen by a user and sent to their chat partner. Please see our documentation on the <a href="https://core.telegram.org/bots/inline#collecting-feedback">feedback collecting</a> for details on how to enable these updates for your bot.</p>
    * @var ChosenInlineResult|null
    */
    public ?ChosenInlineResult $chosen_inline_result = null;

    /**
    * <p>*Optional*. New incoming callback query</p>
    * @var CallbackQuery|null
    */
    public ?CallbackQuery $callback_query = null;

    /**
    * <p>*Optional*. New incoming shipping query. Only for invoices with flexible price</p>
    * @var ShippingQuery|null
    */
    public ?ShippingQuery $shipping_query = null;

    /**
    * <p>*Optional*. New incoming pre-checkout query. Contains full information about checkout</p>
    * @var PreCheckoutQuery|null
    */
    public ?PreCheckoutQuery $pre_checkout_query = null;

    /**
    * <p>*Optional*. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat</p>
    * @var PaidMediaPurchased|null
    */
    public ?PaidMediaPurchased $purchased_paid_media = null;

    /**
    * <p>*Optional*. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot</p>
    * @var Poll|null
    */
    public ?Poll $poll = null;

    /**
    * <p>*Optional*. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.</p>
    * @var PollAnswer|null
    */
    public ?PollAnswer $poll_answer = null;

    /**
    * <p>*Optional*. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.</p>
    * @var ChatMemberUpdated|null
    */
    public ?ChatMemberUpdated $my_chat_member = null;

    /**
    * <p>*Optional*. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify `"chat<em>member"` in the list of *allowed\</em>updates* to receive these updates.</p>
    * @var ChatMemberUpdated|null
    */
    public ?ChatMemberUpdated $chat_member = null;

    /**
    * <p>*Optional*. A request to join the chat has been sent. The bot must have the *can\<em>invite\</em>users* administrator right in the chat to receive these updates.</p>
    * @var ChatJoinRequest|null
    */
    public ?ChatJoinRequest $chat_join_request = null;

    /**
    * <p>*Optional*. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.</p>
    * @var ChatBoostUpdated|null
    */
    public ?ChatBoostUpdated $chat_boost = null;

    /**
    * <p>*Optional*. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.</p>
    * @var ChatBoostRemoved|null
    */
    public ?ChatBoostRemoved $removed_chat_boost = null;



    public function __construct()
    {
        $data = Handler::get();
        $this->update_id = $data['update_id'];
        if (isset($data['message'])){
            $this->message = new Message($data['message']);
        }

        if (isset($data['edited_message'])){
            $this->edited_message = new Message($data['edited_message']);
        }

        if (isset($data['channel_post'])){
            $this->channel_post = new Message($data['channel_post']);
        }

        if (isset($data['edited_channel_post'])){
            $this->edited_channel_post = new Message($data['edited_channel_post']);
        }

        if (isset($data['business_connection'])){
            $this->business_connection = new BusinessConnection($data['business_connection']);
        }

        if (isset($data['business_message'])){
            $this->business_message = new Message($data['business_message']);
        }

        if (isset($data['edited_business_message'])){
            $this->edited_business_message = new Message($data['edited_business_message']);
        }

        if (isset($data['deleted_business_messages'])){
            $this->deleted_business_messages = new BusinessMessagesDeleted($data['deleted_business_messages']);
        }

        if (isset($data['message_reaction'])){
            $this->message_reaction = new MessageReactionUpdated($data['message_reaction']);
        }

        if (isset($data['message_reaction_count'])){
            $this->message_reaction_count = new MessageReactionCountUpdated($data['message_reaction_count']);
        }

        if (isset($data['inline_query'])){
            $this->inline_query = new InlineQuery($data['inline_query']);
        }

        if (isset($data['chosen_inline_result'])){
            $this->chosen_inline_result = new ChosenInlineResult($data['chosen_inline_result']);
        }

        if (isset($data['callback_query'])){
            $this->callback_query = new CallbackQuery($data['callback_query']);
        }

        if (isset($data['shipping_query'])){
            $this->shipping_query = new ShippingQuery($data['shipping_query']);
        }

        if (isset($data['pre_checkout_query'])){
            $this->pre_checkout_query = new PreCheckoutQuery($data['pre_checkout_query']);
        }

        if (isset($data['purchased_paid_media'])){
            $this->purchased_paid_media = new PaidMediaPurchased($data['purchased_paid_media']);
        }

        if (isset($data['poll'])){
            $this->poll = new Poll($data['poll']);
        }

        if (isset($data['poll_answer'])){
            $this->poll_answer = new PollAnswer($data['poll_answer']);
        }

        if (isset($data['my_chat_member'])){
            $this->my_chat_member = new ChatMemberUpdated($data['my_chat_member']);
        }

        if (isset($data['chat_member'])){
            $this->chat_member = new ChatMemberUpdated($data['chat_member']);
        }

        if (isset($data['chat_join_request'])){
            $this->chat_join_request = new ChatJoinRequest($data['chat_join_request']);
        }

        if (isset($data['chat_boost'])){
            $this->chat_boost = new ChatBoostUpdated($data['chat_boost']);
        }

        if (isset($data['removed_chat_boost'])){
            $this->removed_chat_boost = new ChatBoostRemoved($data['removed_chat_boost']);
        }

    }
}