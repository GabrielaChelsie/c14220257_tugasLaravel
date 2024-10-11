<?php

namespace Database\Factories;

use App\Models\event_categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event_categories>
 */
class EventCategoriesFactory extends Factory
{
    protected $model = event_categories::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'active' => 1,
        ];
    }
}
