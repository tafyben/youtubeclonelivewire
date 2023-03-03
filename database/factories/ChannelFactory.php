<?php

namespace Database\Factories;

use App\Models\Channel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ChannelFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'uid' => $this->faker->word(),
            'description' => $this->faker->text(),
            'image' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => Channel::factory(),
        ];
    }
}
