<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;

Route::post('/telegram/webhook/{bot}', [TelegramController::class, 'updateMessages'])->name('telegram.updateMessages');
Route::get('/telegram/set-webhook/{bot}', [TelegramController::class, 'setupWebhook']);

Route::get('/', fn() => 'It works!');
