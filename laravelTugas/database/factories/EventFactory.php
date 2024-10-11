<?php

namespace Database\Factories;

use App\Models\event_categories;
use App\Models\events;
use App\Models\organizers;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class EventFactory extends Factory
{
    protected $model = events::class;
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'venue' => fake()->city(),
            'date' => fake()->date(),
            'description' => fake()->text(20),
            'booking_url' => fake() ->url(),
            'organizer_id' => organizers::factory(),
            'event_category_id' => event_categories::factory(),
            'tags' => fake()->words(3),
            'start_time' => fake()->dateTime(),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
    }
}
