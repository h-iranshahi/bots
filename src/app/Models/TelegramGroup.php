<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelegramGroup extends Model
{
    //
    public $incrementing = false; // Disable auto-incrementing for the primary key
    protected $keyType = 'int'; // Specify the type of the primary key (e.g., 'int', 'string')

    protected $table = 'telegram_groups';

    protected $fillable = [
        'id',
        'type',
        'title',
    ];

    protected $casts = [
        'params' => 'array'
    ];

    public function messages()
    {
        return $this->hasMany(TelegramMessage::class, 'chat_id');
    }

    public function chats()
    {
        return $this->morphMany(TelegramChat::class, 'owner');
    }

}
