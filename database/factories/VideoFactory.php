<?php

namespace Database\Factories;

use App\Models\Channel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VideoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'uid' => $this->faker->word(),
            'path' => $this->faker->word(),
            'processed_file' => $this->faker->word(),
            'visibility' => $this->faker->word(),
            'processed' => $this->faker->boolean(),
            'allow_likes' => $this->faker->boolean(),
            'allow_comments' => $this->faker->boolean(),
            'processing_percentage' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'channel_id' => Channel::factory(),
        ];
    }
}
