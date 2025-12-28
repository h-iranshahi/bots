<?php

namespace App\TelegramBots\Spy\Commands;

use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;
use App\Models\TelegramChat;
use App\Utils\NumberConverter;

class Iparticipate extends BaseCommand
{
    protected string $name = "iparticipate";
    protected string $description = "Toggle participation in the game";

    public function handle()
    {
        $from = $this->update->getCallbackQuery()->getFrom();
        $chat = $this->update->getMessage()->getChat();
        $gameNumber = $this->getCommandParameter('gameNumber');
        $currentMessageId = $this->getCommandParameter('currentMessageId') ?? 0;

        $chatRecord = $this->getChatRecord($chat->getId());
        $chatParams = $chatRecord->params;

        $userName = $this->encodeUserName($from);

        $this->toggleParticipant($chatParams['games'][$gameNumber]['participants'], $from['id'], $userName);
        
        $chatRecord->params = $chatParams;
        $chatRecord->save();

        $messageText = "شماره بازی: " . $gameNumber . "\r\n";
		$messageText .= "وضعیت: ";
		$messageText .= "در حال یارگیری..." . "\r\n";
        $messageText .= $this->generateParticipantList($chatParams['games'][$gameNumber]['participants']);
 

        $replyMarkup = $this->buildInlineKeyboard([
            [['text' => 'شرکت میکنم', 'callback_data' => '/Iparticipate?currentMessageId=' . $currentMessageId . '&gameNumber=' . $gameNumber]],
            [['text' => 'بریم برای بازی', 'callback_data' => '/StartGame?currentMessageId=' . $currentMessageId . '&gameNumber=' . $gameNumber]],
        ]);

        // $this->telegram->sendMessage([
        //     'chat_id' => $chat->getId(),
        //     'text' => $messageText,
        //     'reply_markup' => json_encode($replyMarkup)
        // ]);
        
        $this->telegram->editMessageText([
            'chat_id' => $chat->getId(),
            'message_id' => $currentMessageId,
            'text' => $messageText,
            'parse_mode' => 'HTML',
            'reply_markup' => json_encode($replyMarkup)
        ]);

        
    }
}
