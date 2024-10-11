<?php

namespace Database\Seeders;

use App\Models\event_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventCategoriesSeeder extends Seeder
{
    public function run()
    {
        event_categories::create(['name' => 'Expo', 'active' => 1]);
        event_categories::create(['name' => 'Concert', 'active' => 1]);
        event_categories::create(['name' => 'Conference', 'active' => 1]);
    }
}
