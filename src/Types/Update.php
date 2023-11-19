<?php

namespace Milly\Laragram\Types;


/**
* Update
 *
 *<p>*Optional*. A request to join the chat has been sent. The bot must have the *can\<em>invite\</em>users* administrator right in the chat to receive these updates.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#update
 */
class Update
{
    /**
    * <p>The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using <a href="https://core.telegram.org/bots/api/#setwebhook">webhooks</a>, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.</p>
    * @var int
    */
    public int $update_id;

    /**
    * <p>*Optional*. New incoming message of any kind - text, photo, sticker, etc.</p>
    * @var Message|null
    */
    public ?Message $message = null;

    /**
    * <p>*Optional*. New version of a message that is known to the bot and was edited</p>
    * @var Message|null
    */
    public ?Message $edited_message = null;

    /**
    * <p>*Optional*. New incoming channel post of any kind - text, photo, sticker, etc.</p>
    * @var Message|null
    */
    public ?Message $channel_post = null;

    /**
    * <p>*Optional*. New version of a channel post that is known to the bot and was edited</p>
    * @var Message|null
    */
    public ?Message $edited_channel_post = null;

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
    * <p>*Optional*. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot</p>
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

    }
}