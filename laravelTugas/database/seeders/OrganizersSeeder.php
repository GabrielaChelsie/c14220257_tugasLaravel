<?php

namespace Database\Seeders;

use App\Models\Organizer;
use App\Models\Organizers;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class OrganizersSeeder extends Seeder
{
    public function run()
    {
        Organizer::create([
            'name' => 'Sparkling', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Five Star Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'One Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Monday Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Scenery Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Amazing Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

    }
}
