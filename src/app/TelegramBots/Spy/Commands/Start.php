<?php

namespace App\TelegramBots\Spy\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;
use Illuminate\Support\Facades\Log;

class Start extends Command
{
    protected string $name = "start";
    protected string $description = "Start the bot";

    public function handle()
    {
        $from = $this->update->getMessage()->getFrom();
        $chat = $this->update->getMessage()->getChat();
 

        $message = " کاربر عزیز ";
        $message .= '"' . $from->getUsername() . '"';
        $message .= " از حسن نیت شما سپاسگزارم \r\n";
        $message .= " \r\n";

        $button1 = [
            'text' => 'شروع ',
            'callback_data' => '/Participating'
        ];

        $this->telegram->sendMessage([
            'chat_id' => $chat->getId(),
            'text' => $message,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        $button1
                    ]
                ]
            ])
        ]);
    }
}
