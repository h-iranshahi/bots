<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelegramUser extends Model
{
    public $incrementing = false; // Disable auto-incrementing for the primary key
    protected $keyType = 'int'; // Specify the type of the primary key (e.g., 'int', 'string')

    protected $table = 'telegram_users';

    protected $fillable = [
        'id',
        'username',
        'first_name',
        'last_name',
        'is_bot',
    ];


    public function messages()
    {
        return $this->hasMany(TelegramMessage::class, 'tel_user_id');
    }

    public function chats()
    {
        return $this->morphMany(TelegramChat::class, 'owner');
    }


}
