<?php

namespace Milly\Laragram\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FSM extends Model
{
    use HasFactory;

    /**
     * @var int|mixed|null
     */
    public int $telegram_id;
    /**
     * @var mixed|string
     */
    public string $status;
    protected $table = "laragram_fsm";
}
