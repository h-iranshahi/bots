<?php

namespace App\TelegramBots\Spy\Commands;

use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;
use App\Models\TelegramChat;
use App\Models\TelegramUser;
use App\Utils\NumberConverter;
use Illuminate\Support\Facades\Log;

class StartGame extends BaseCommand
{
    protected string $name = "startgame";
    protected string $description = "Begin the game";

    public function handle()
    {
        $from = $this->update->getCallbackQuery()->getFrom();
        $chat = $this->update->getMessage()->getChat();

        $chatRecord = $this->getChatRecord($chat->getId());
        $chatParams = $this->getChatParameters($chat->getId());

        $gameNumber = $this->getCommandParameter('gameNumber');
        $currentMessageId = $this->getCommandParameter('currentMessageId') ?? 0;

        $particpants = ($chatParams['games'][$gameNumber]['participants'] ?? []);

        //
        $notice = []; 
        foreach($particpants as $key => $part)
        {
            $user = TelegramChat::where('type', 'private')->where('owner_id', $key)->first();
            if(!$user)
            {
                $notice[$key] = 'شناخته نشد!';
            }
        }

        if( count($particpants) < 3 || count($notice))
        {
            // message text
            $messageText = "شماره بازی: " . $gameNumber . "\r\n";
            $messageText .= "وضعیت: ";
            $messageText .= "در حال یارگیری..." . "\r\n";
             
            $messageText .= $this->generateParticipantList($particpants);
    
            if(count($particpants) < 3)
            {
                $messageText .= " \r\n";
                $messageText .= "<i>حداقل 3 شرکت کننده برای شروع بازی لازم است!</i>" . " \r\n";    
            }

            if(count($notice))
            {
                $messageText .= " \r\n";
                $messageText .= "شرکت کنندگانی که شناخته نشده اند باید به پی وی روبات یک پیام ارسال نمایند" . " \r\n";    
            }

            $replyMarkup = $this->buildInlineKeyboard([
                [['text' => 'شرکت میکنم', 'callback_data' => '/Iparticipate?currentMessageId=' . $currentMessageId . '&gameNumber=' . $gameNumber]],
                [['text' => 'بریم برای بازی', 'callback_data' => '/StartGame?currentMessageId=' . $currentMessageId . '&gameNumber=' . $gameNumber]],
            ]);

        }
        else
        {
			$messageText =  " \r\n";
			$messageText .= "";
			$messageText .= "اکنون به پی وی من ";
			$messageText .= " @JaasousBot ";
			$messageText .= "مراجعه کنید" . " \r\n";
			$messageText .= "";

            // start random jaasous
            $jaasous = rand(1, count($particpants));
            
            $content = file_get_contents(dirname(dirname(__FILE__)).'/list.txt');
            $list = explode("\n",$content);
            $list = array_filter($list, 'trim');
            
            $r = rand( 0, count($list)-1 );
            $secretWord = $list[ $r ];
                                        
            $chatParams['games'][$gameNumber]['secretWord'] = $secretWord;

            $j = 0;
            foreach($particpants as $key => $part){
                
                $userMessageText = " \r\n";
                
                if($part && $key)
                {
                    $j++;
                    
                    $userMessageText .= "شماره بازی: " . $gameNumber . "\r\n";

                    if($jaasous == $j)
                    {
                        $userMessageText .= "<b>در این نوبت نقش جاسوس به شما داده شده است</b>\r\n";
                        $userMessageText .= "شرکت کنندگان یک کلمه رمزی برای خود در نظر گرفته اند، سعی کنید کلمه رمز را تشخیص دهید تا دیگران متوجه نقش شما نشوند\r\n";
                    
                        $chatParams['games'][$gameNumber]['jaasousId'] = $key;
                        $chatParams['games'][$gameNumber]['jaasousName'] = $part['name'];
                    }
                    else
                    {
                        $userMessageText .= "<b>شما یک شهروند عادی هستید</b>\r\n";
                        $userMessageText .= "اسم رمز : <b>$secretWord</b>\r\n";
                        $userMessageText .= "جاسوس از اسم رمز اطلاعی ندارد، تلاش کنید جاسوس را پیدا کنید\r\n";
                        
                    }
                    

                    $params2['parse_mode'] = 'HTML';   

                    $user = TelegramUser::where('id', $key)->first();
                    $userchatRecord = $user->chats()->where('bot_id', $chatRecord['bot_id'])->first();

                    $this->telegram->sendMessage([
                        'chat_id' => $userchatRecord->chat_id,
                        'text' => $userMessageText,
                        'parse_mode' => 'HTML',
                        //'reply_markup' => json_encode($replyMarkup)
                    ]);
                }
                
                
            }
            

            $replyMarkup = $this->buildInlineKeyboard([
                [['text' => 'بازی از نو', 'callback_data' => '/Participating' ]],
            ]);

        }
 

        $this->telegram->editMessageText([
            'chat_id' => $chat->getId(),
            'message_id' => $currentMessageId,
            'text' => $messageText,
            'parse_mode' => 'HTML',
            'reply_markup' => json_encode($replyMarkup)
        ]);

        
    }
}
