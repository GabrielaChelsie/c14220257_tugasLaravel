<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\event_categories;
use App\Models\events;
use App\Models\organizers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(event_categories::class);
    
        $this->call(organizers::class);
        
        $this->call(events::class);
    }
}
