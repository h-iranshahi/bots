<?php

namespace App\TelegramBots\Spy\Commands;

use Telegram\Bot\Commands\Command;
use App\Models\TelegramChat;
use App\Utils\NumberConverter;

abstract class BaseCommand extends Command
{

    protected function getChatRecord(int $chatId): ?TelegramChat
    {
        return TelegramChat::where('chat_id', $chatId)->first();
    }

    protected function getChatParameters(int $chatId)
    {
        $model = $this->getChatRecord($chatId);
        return $model->params;
    }

    protected function setChatParameters(int $chatId, $params): bool
    {
        $model = $this->getChatRecord($chatId);
        $model->params = $params;
        $model->save();

        return true;
    }

    protected function encodeUserName($from): string
    {
        $delimiter = ($from['first_name'] && ($from['last_name'] ?? '')) ? " " : "";
        return base64_encode($from['first_name'] . $delimiter . ($from['last_name'] ?? ''));
    }

    protected function decodeUserName(string $name): string
    {
        return base64_decode($name);
    }

    protected function buildInlineKeyboard(array $buttons): array
    {
        $keyboard = [];
        foreach ($buttons as $row) {
            $keyboard['inline_keyboard'][] = array_map(fn($button) => [
                'text' => $button['text'], 
                'callback_data' => $button['callback_data']
            ], $row);
        }
        return $keyboard;
    }

    protected function generateParticipantList(array $participants): string
    {
        $messageText = "";
        $messageText .= "در صورتیکه تمایل به بازی دارید گزینه \"شرکت می کنم\" را فشار دهید " ;
        $messageText .= "و برای اتمام یارگیری و شروع بازی گزینه \"بریم برای بازی\" را انتخاب کنید" . "\r\n";
        $messageText .= " \r\n";

        $messageText .= "<b>شرکت کنندگان:</b>\r\n";
        $i = 0;
        foreach ($participants as $key => $participant) {
            if ($participant && $key) {
                $i++;
                $messageText .= 'شماره ' . NumberConverter::toPersian($i) . ") " . $this->decodeUserName($participant['name']) . "\r\n";
            }
        }
        return $messageText;
    }

    protected function toggleParticipant(array &$participants, int $userId, string $userName): void
    {
        if (isset($participants[$userId])) {
            unset($participants[$userId]);
        } else {
            $participants[$userId]['name'] = $userName;
        }
    }

    protected function getCommandParameter($name)
    {
        return $this->entity['commandParams'][$name] ?? null;
    }

    
}
