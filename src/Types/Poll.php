<?php

namespace Milly\Laragram\Types;


/**
* Poll
 *
 *<p>*Optional*. Point in time (Unix timestamp) when the poll will be automatically closed</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#poll
 */
class Poll
{
    /**
    * <p>Unique poll identifier</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Poll question, 1-300 characters</p>
    * @var string
    */
    public string $question;

    /**
    * <p>List of poll options</p>
    * @var array
    */
    public array $options;

    /**
    * <p>Total number of users that voted in the poll</p>
    * @var int
    */
    public int $total_voter_count;

    /**
    * <p>*True*, if the poll is closed</p>
    * @var bool
    */
    public bool $is_closed;

    /**
    * <p>*True*, if the poll is anonymous</p>
    * @var bool
    */
    public bool $is_anonymous;

    /**
    * <p>Poll type, currently can be “regular” or “quiz”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>*True*, if the poll allows multiple answers</p>
    * @var bool
    */
    public bool $allows_multiple_answers;

    /**
    * <p>*Optional*. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.</p>
    * @var int|null
    */
    public ?int $correct_option_id = null;

    /**
    * <p>*Optional*. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters</p>
    * @var string|null
    */
    public ?string $explanation = null;

    /**
    * <p>*Optional*. Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*</p>
    * @var array|null
    */
    public ?array $explanation_entities = null;

    /**
    * <p>*Optional*. Amount of time in seconds the poll will be active after creation</p>
    * @var int|null
    */
    public ?int $open_period = null;

    /**
    * <p>*Optional*. Point in time (Unix timestamp) when the poll will be automatically closed</p>
    * @var int|null
    */
    public ?int $close_date = null;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['poll'];
        $this->id = $data['id'];
        $this->question = $data['question'];
        $this->options = $data['options'];
        $this->total_voter_count = $data['total_voter_count'];
        $this->is_closed = $data['is_closed'];
        $this->is_anonymous = $data['is_anonymous'];
        $this->type = $data['type'];
        $this->allows_multiple_answers = $data['allows_multiple_answers'];
        if (isset($data['correct_option_id'])){
            $this->correct_option_id = $data['correct_option_id'];
        }

        if (isset($data['explanation'])){
            $this->explanation = $data['explanation'];
        }

        if (isset($data['explanation_entities'])){
            $this->explanation_entities = $data['explanation_entities'];
        }

        if (isset($data['open_period'])){
            $this->open_period = $data['open_period'];
        }

        if (isset($data['close_date'])){
            $this->close_date = $data['close_date'];
        }

    }
}