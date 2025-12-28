<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramBot extends Model
{
    use HasFactory;


    protected $table = "telegram_bots";

    public function chats()
    {
        return $this->hasMany(TelegramChat::class, 'bot_id');
    }
}
