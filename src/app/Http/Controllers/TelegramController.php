<?php

namespace App\Http\Controllers;

use App\Models\TelegramBot;
use App\Telegram\Commands\StartCommand;
use App\Telegram\Commands\ParticipatingCommand;
use App\Telegram\Commands\IParticipateCommand;
use App\TelegramBots\BotHandler;
use Carbon\Carbon;
use Telegram\Bot\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class TelegramController extends Controller
{
    public function updateMessages(TelegramBot $bot, Request $request)
    {
        Log::info("UPDATE MESSAGES :: ", [$request->all()]);

        $botHandler = new BotHandler($bot);

        $botHandler->run($request);

        return response()->json(['status' => 'ok']);
    }

    public function setupWebhook(TelegramBot $bot)
    {
        try {

            if(!$bot->webhooked_at)
            {
                $params['url'] = route('telegram.updateMessages', $bot->id, true); // force full URL
                $params['url']= str_replace('http://', 'https://', $params['url']);
                $url = 'https://api.telegram.org/bot'.$bot->token . '/setWebhook?' . http_build_query($params) ;

                $output = file_get_contents($url);

                $bot->webhooked_at = Carbon::now();
                $bot->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Webhook setup completed successfully.',
                    'output' => $output,
                ]);
    
            }
            else
            {
                $url = 'https://api.telegram.org/bot'.$bot->token . '/deleteWebhook' ;
                $output = file_get_contents($url);
    
                $bot->webhooked_at = null;
                $bot->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Webhook removed successfully.',
                    'output' => $output,
                ]);
    
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }



}
