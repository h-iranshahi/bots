<?php

namespace App\TelegramBots\Spy;

use Illuminate\Support\Facades\Log;

class PageGenerator 
{
    public function generate($command, $gameNumber)
    {
        $page = "شماره بازی: " . $gameNumber . "\r\n";
		$page .= "وضعیت: ";
		
		if($command == 'participating')
		{
			$page .= "در حال یارگیری...";
		}
		elseif($command == '' )
		{
			$page .= "در حال بازی";
		}
		
		$page .= "\r\n";

		if($command == 'participating')
		{
			$page .= "در صورتیکه تمایل به بازی دارید گزینه \"شرکت می کنم\" را فشار دهید " ;
			$page .= "و برای اتمام یارگیری و شروع بازی گزینه \"بریم برای بازی\" را انتخاب کنید" . "\r\n";
			$page .= " \r\n";
			
			$params['inline_keyboard'][] =
					[
						['text' => 'شرکت میکنم', 'callback_data' => '/iparticipate?gameNumber='.$gameNumber ] ,
					];
			$params['inline_keyboard'][] =
					[
						['text' => 'بریم برای بازی', 'callback_data' => '/startGame?gameNumber='.$gameNumber ] ,
					]
					;
			$params['parse_mode'] = 'HTML';   
		}
		elseif($command == 'playing' )
		{
			$page .=  " \r\n";
			$page .= "";
			$page .= "اکنون به پی وی من ";
			$page .= " @JaasousBot ";
			$page .= "مراجعه کنید" . " \r\n";
			$page .= "";
						
			//
			$params['inline_keyboard'][] =
				[
					['text' => 'بازی از نو', 'callback_data' => '/participating' ] ,
				]
				;
			$params['parse_mode'] = 'HTML';   
		}
			
		$page .= "<b>شرکت کنندگان:</b>" . " \r\n";
		
		$i = 0;
		if(count($chatParams['games'][$gameNumber]['participants']))
		foreach($chatParams['games'][$gameNumber]['participants'] as $key => $part){
			if($part && $key){
				$i++;
				$page .= $i .") " .base64_decode($part['name']). " \r\n";
			}
		}

        return ['page' => $page, 'params' => $params];
    }
}
