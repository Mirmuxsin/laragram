<?php

namespace Milly\Laragram\Types;


/**
* Poll
 *
 *This object contains information about a poll.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#poll
 */
class Poll
{
    /**
    * Unique poll identifier
    * @var string
    */
    public string $id;

    /**
    * Poll question, 1-300 characters
    * @var string
    */
    public string $question;

    /**
    * List of poll options
    * @var array
    */
    public array $options;

    /**
    * Total number of users that voted in the poll
    * @var int
    */
    public int $total_voter_count;

    /**
    * *True*, if the poll is closed
    * @var bool
    */
    public bool $is_closed;

    /**
    * *True*, if the poll is anonymous
    * @var bool
    */
    public bool $is_anonymous;

    /**
    * Poll type, currently can be “regular” or “quiz”
    * @var string
    */
    public string $type;

    /**
    * *True*, if the poll allows multiple answers
    * @var bool
    */
    public bool $allows_multiple_answers;

    /**
    * *Optional*. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
    * @var int|null
    */
    public ?int $correct_option_id = null;

    /**
    * *Optional*. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
    * @var string|null
    */
    public ?string $explanation = null;

    /**
    * *Optional*. Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*
    * @var array|null
    */
    public ?array $explanation_entities = null;

    /**
    * *Optional*. Amount of time in seconds the poll will be active after creation
    * @var int|null
    */
    public ?int $open_period = null;

    /**
    * *Optional*. Point in time (Unix timestamp) when the poll will be automatically closed
    * @var int|null
    */
    public ?int $close_date = null;



    public function __construct($data)
    {
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