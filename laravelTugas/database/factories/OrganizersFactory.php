<?php

namespace Database\Factories;

use App\Models\organizers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\organizers>
 */
class OrganizersFactory extends Factory
{
    protected $model = organizers::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company, 
            'description' => $this->faker->sentence, 
            'facebook_link' => $this->faker->url, 
            'x_link' => $this->faker->url, 
            'website_link' => $this->faker->url, 
            'active' => 1, 
        ];
    }
}
