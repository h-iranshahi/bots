<?php

namespace Database\Factories;

use App\Models\TelegramBot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TelegramBot>
 */
class TelegramBotFactory extends Factory
{
    protected $model = TelegramBot::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'name' => $this->faker->userName,
            'token' => $this->faker->sha256,
            'note' => $this->faker->paragraph,
            'last_update_id' => $this->faker->numberBetween(1, 100000),
            'webhooked_at' => $this->faker->optional()->dateTime,
            'created_by' => $this->faker->randomNumber(5, true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
