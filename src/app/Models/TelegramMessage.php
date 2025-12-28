<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelegramMessage extends Model
{
    //
    protected $table = 'telegram_messages';

    protected $fillable = [
        'text',
        'message_id',
        'chat_id',
        'sender_id',
        'date',
        'is_command',
    ];


}
