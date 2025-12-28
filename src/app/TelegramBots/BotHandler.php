<?php

namespace App\TelegramBots;

use Illuminate\Support\Str;
use Telegram\Bot\Api;
use App\Models\TelegramBot;
use App\Models\TelegramChat;
use App\Models\TelegramGroup;
use App\Models\TelegramUser;
use App\Models\TelegramMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;

class BotHandler
{
    protected $bot;
    protected $telegram;

    public function __construct(TelegramBot $bot)
    {
        $this->bot = $bot;
        
        $this->telegram = app('my.telegram.api', [$bot->token]);
    }

    public function run($request)
    {
        $update = $this->telegram->getWebhookUpdate();

        $inputs = $update->all();

        $updateType = $this->determineUpdateType($inputs);

        if($updateType == 'unknown')
            Log::info('Unknown request ::', [$inputs]);

        $message = $this->getMessage($inputs, $updateType);
        $cmd = $this->getCommand($inputs, $updateType);
        $cmdParams = $this->getCommandParams($inputs, $updateType);
        $chat = $this->getChat($inputs, $updateType);
        $sender = $this->getSender($inputs, $updateType);

        $commandClass = 'App\\TelegramBots\\Spy\\Commands\\' . Str::studly($cmd);

        if(in_array($updateType, [
            'text_message',
            'edited_message',
            'callback_query',
            ]))
            $group = $this->storeGroupIfNotExist($chat['id'], $chat['type'], $chat['title'] ?? '');
        
        if(in_array($updateType, [
            'text_message',
            'edited_message',
            'callback_query',
            ]))
            $user = $this->storeUserIfNotExist($sender);

        if(in_array($updateType, [
            'text_message',
            'edited_message',
            'callback_query',
            ]))
            $msg = $this->storeMessage($message, $chat, $user, $cmd);

        if(in_array($updateType, [
            'text_message',
            'edited_message',
            'callback_query',
            ]))
            $this->storeChatIfNotExist($chat, $user, $group, $cmd);
    
        if(class_exists($commandClass))
        {
            $command = app($commandClass);
            $command->make($this->telegram, $update, ['commandParams' => $cmdParams]);
        }
        else
        {
            $this->telegram->sendMessage([
                'chat_id' => $chat['id'],
                'text' => "Unknown command. Type /help for a list of available commands.",
            ]);

        }
               

    }

    protected function getCommand($input, $updateType)
    {
        if($updateType == 'callback_query')
        {
            $cmd = $input['callback_query']['data'];
        }
        else
        {
            $cmd = $input['message']['text'] ?? '';
        }
        
        if( Str::startsWith($cmd, "/") && Str::replace(" ", "", $cmd) == $cmd )
        {
            $cmd = Str::replace("/", "", Str::replace(" ", "", $cmd));
            $cmd = explode('?', $cmd);
            return $cmd[0];
        }

        return false;
    }

    protected function getCommandParams($input, $updateType)
    {
        if($updateType == 'callback_query')
        {
            $cmd = $input['callback_query']['data'];
        }
        else
        {
            $cmd = $input['message']['text'] ?? '';
        }
        
        if( Str::startsWith($cmd, "/") && Str::replace(" ", "", $cmd) == $cmd )
        {
            $cmd = Str::replace("/", "", Str::replace(" ", "", $cmd));
            $cmd = explode('?', $cmd);

            if(isset($cmd[1])){
                parse_str($cmd[1], $params);
                return $params;
            } 

        }

        return [];
    }

    protected function getMessage($input, $updateType)
    {
        if($updateType == 'callback_query')
        {
            $msgText = '';
            $data = $input['callback_query']['data'];
            $btns = $input['callback_query']['message']['reply_markup']['inline_keyboard'];
            foreach($btns as $i => $row)
            {
                foreach($row as $j => $jrow)
                {
                    if($jrow['callback_data'] == $data)
                    {
                        $msgText = $jrow['text'];
                    }
                }    
            }

            $message = $input['callback_query']['message'];
        }
        else
        {
            $message = $input['message'];
            $msgText = $input['message']['text'] ?? '';
        }

        $message['text'] = $msgText;

        return $message;
    }

    protected function getChat($input, $updateType)
    {
        if($updateType == 'callback_query')
        {
            $chat = $input['callback_query']['message']['chat'];
        }
        else
        {
            $chat = $input['message']['chat'];
        }

        return $chat;
    } 
    
    protected function getSender($input, $updateType)
    {
        if($updateType == 'callback_query')
        {
            $sender = $input['callback_query']['from'];
        }
        else
        {
            $sender = $input['message']['from'];
        }

        return $sender;
    } 

    protected function determineUpdateType(array $message): string
    {
        if (isset($message['message'])) {
            $message = $message['message'];
    
            if (isset($message['text'])) {
                return 'text_message';
            }
            if (isset($message['new_chat_members'])) {
                return 'new_chat_members';
            }
            if (isset($message['left_chat_member'])) {
                return 'left_chat_member';
            }
            if (isset($message['new_chat_title'])) {
                return 'new_chat_title';
            }
            if (isset($message['new_chat_photo'])) {
                return 'new_chat_photo';
            }
            if (isset($message['delete_chat_photo'])) {
                return 'delete_chat_photo';
            }
            if (isset($message['group_chat_created'])) {
                return 'group_chat_created';
            }
            if (isset($message['supergroup_chat_created'])) {
                return 'supergroup_chat_created';
            }
            if (isset($message['channel_chat_created'])) {
                return 'channel_chat_created';
            }
            if (isset($message['pinned_message'])) {
                return 'pinned_message';
            }
        }
    
        if (isset($message['edited_message'])) {
            return 'edited_message';
        }
    
        if (isset($message['channel_post'])) {
            return 'channel_post';
        }
    
        if (isset($message['edited_channel_post'])) {
            return 'edited_channel_post';
        }
    
        if (isset($message['inline_query'])) {
            return 'inline_query';
        }
    
        if (isset($message['chosen_inline_result'])) {
            return 'chosen_inline_result';
        }
    
        if (isset($message['callback_query'])) {
            return 'callback_query';
        }
    
        if (isset($message['poll'])) {
            return 'poll';
        }
    
        if (isset($message['poll_answer'])) {
            return 'poll_answer';
        }
    
        if (isset($message['pre_checkout_query'])) {
            return 'pre_checkout_query';
        }
    
        if (isset($message['successful_payment'])) {
            return 'successful_payment';
        }
    
        if (isset($message['my_chat_member'])) {
            return 'my_chat_member';
        }
    
        if (isset($message['chat_member'])) {
            return 'chat_member';
        }
    
        return 'unknown';        
    }

    protected function storeChatIfNotExist($chat, $user, $group, $command)
    {
        $type = $chat['type'];
        
        $ownerType = $type === 'private' 
            ? TelegramUser::class 
            : TelegramGroup::class;

        $ownerId = $type === 'private'
            ? $user->id
            : $group->id;

        $title = $type === 'private'
            ? trim(($chat['first_name'] ?? '') . ' ' . ($chat['last_name'] ?? ''))
            : $chat['title'];
        
        $params['last_command'] = $command;

        $chatRow = $this->bot->chats()->where('chat_id', $chat['id'])->first();
        if( $chatRow )
        {
            $params = $chatRow->params;
            $params['last_command'] = $command;

            if($params['last_command'])
            {
                $chatRow->update([
                    'params' => $params,
                ]);    
            }

        }
        else
        {
            $chatRow = $this->bot->chats()->create([
                'type' => $type,
                'chat_id' => $chat['id'],
                'chat_id_number' => $chat['id'],
                'title' => $title,
                'params' => $params,
                'owner_id' => $ownerId,
                'owner_type' => $ownerType,        
            ]);
        }
 
        return $chatRow;
        
    }

    protected function storeUserIfNotExist($sender)
    {
        if($sender)
        {
            $user = TelegramUser::firstOrCreate(
                [
                    'id' => $sender['id']
                ],
                [
                    'id' => $sender['id'],
                    'first_name' => $sender['first_name'] ?? null,
                    'last_name' => $sender['last_name'] ?? null,
                    'username' => $sender['username'] ?? null,
                    'is_bot' => $sender['is_bot'] ?? 0,
                ]);

            return $user;
        }

        return null;
    }

    protected function storeGroupIfNotExist($chatId, $chatType, $chatTitle)
    {
        if($chatType == 'supergroup' || $chatType == 'group')
        {
            $group = TelegramGroup::firstOrCreate(
                [
                    'id' => $chatId
                ],
                [
                    'id' => $chatId,
                    'title' => $chatTitle,
                ]);

            return $group;
        }

        return null;
    }

    protected function storeMessage($message, $chat, $sender, $command)
    {
        $messageRow = TelegramMessage::firstOrcreate(
            [
                'message_id' => $message['message_id'],
                'chat_id' => $chat['id'],
            ],
            [
                'message_id' => $message['message_id'],
                'chat_id' => $chat['id'],
                'sender_id' => $sender->id,
                'text' => $message['text'] ?? null,
                'date' => Carbon::createFromTimestamp($message['date'])->format('Y-m-d H:i:s'),
                'is_command' => ($command ? 1 : 0),
            ]);

        return $messageRow;
    }
 
     
}