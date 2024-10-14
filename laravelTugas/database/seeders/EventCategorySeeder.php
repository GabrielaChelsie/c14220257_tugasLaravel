<?php

namespace Database\Seeders;

use App\Models\EventCategory;
use Illuminate\Database\Seeder;

class EventCategorySeeder extends Seeder
{
    public function run()
    {
        EventCategory::create(['name' => 'Expo', 'active' => 1]);
        EventCategory::create(['name' => 'Concert', 'active' => 1]);
        EventCategory::create(['name' => 'Conference', 'active' => 1]);
    }
}
