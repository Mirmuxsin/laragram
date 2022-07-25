<?php

namespace Milly\Laragram\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FSM extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'telegram_id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "laragram_fsm";

    /**
     * @var int|mixed|null
     */
    public int $telegram_id;

    /**
     * @var string
     */
    public string $status;
}
