<?php

namespace App\TelegramBots\Spy\Commands;

use App\Models\TelegramChat;
use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class Participating extends Command
{
    protected string $name = "participating";
    protected string $description = "Join the game";

    public function handle()
    {
        $from = $this->update->getMessage()->getFrom();
        $chat = $this->update->getMessage()->getChat();
        $messageId = $this->update->getMessage()->getMessageId();

        $gameNumber = Cache::get('spy.gameNumber');
        $gameNumber++;
        Cache::put('spy.gameNumber', $gameNumber);

        // message text
        $messageText = "شماره بازی: " . $gameNumber . "\r\n";
		$messageText .= "وضعیت: ";
		$messageText .= "در حال یارگیری..." . "\r\n";
        $messageText .= "در صورتیکه تمایل به بازی دارید گزینه \"شرکت می کنم\" را فشار دهید " ;
        $messageText .= "و برای اتمام یارگیری و شروع بازی گزینه \"بریم برای بازی\" را انتخاب کنید" . "\r\n";
        $messageText .= " \r\n";

        $chatRecord = TelegramChat::where('chat_id', $chat->getId())->first();
        
        $params = $chatRecord->params;
        $params['gameNumber'] = $gameNumber;
        $params['games'] = $params['games'] ?? [];
        $params['games'][$gameNumber] = $params['games'][$gameNumber]  ?? [];
        $params['games'][$gameNumber]['participants'] = []; // reset game
        $chatRecord->params = $params;

        $chatRecord->save();

        $resp = $this->telegram->sendMessage([
            'chat_id' => $chat->getId(),
            'text' => $messageText,
            'parse_mode' => 'HTML',
            //'reply_markup' => json_encode($replyMarkup)
        ]);
        
        // buttons
        $replyMarkup['inline_keyboard'][] =
                [
                    ['text' => 'شرکت میکنم', 'callback_data' => '/Iparticipate?currentMessageId='.$resp->getMessageId().'&gameNumber='.$gameNumber ] ,
                ];
        $replyMarkup['inline_keyboard'][] =
                [
                    ['text' => 'بریم برای بازی', 'callback_data' => '/StartGame?currentMessageId='.$resp->getMessageId().'&gameNumber='.$gameNumber ] ,
                ];
        
        $this->telegram->editMessageReplyMarkup([
            'chat_id' => $chat->getId(),
            'message_id' => $resp->getMessageId(),
            'reply_markup' => json_encode($replyMarkup)
        ]);

    }
}
