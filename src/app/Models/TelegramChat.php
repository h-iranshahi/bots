<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelegramChat extends Model
{
    //

    protected $table = 'telegram_chats';

    protected $fillable = [
        'chat_id',
        'chat_id_number',
        'chat_title',
        'type',
        'params',   
        'owner_id',
        'owner_type', 
    ];

    protected $casts = [
        'params' => 'array'
    ];

    public function messages()
    {
        return $this->hasMany(TelegramMessage::class, 'chat_id');
    }

    public function owner()
    {
        return $this->morphTo();
    }


}
