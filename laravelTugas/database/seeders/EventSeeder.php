<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\events;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the events data
        events::create([
            'title' => 'Indonesia Innovation Challenge 2024 Powered by Launch Pad',
            'venue' => 'Jatim Expo',
            'date' => '2024-10-23',
            'start_time' => '09:00:00',
            'description' => 'An innovative challenge event.',
            'booking_url' => null, // Add a URL if available
            'tags' => 'innovation,challenge',
            'organizer_events_id' => 1, // Replace with the actual organizer ID
            'category_events_id' => 1, // Replace with the actual category ID
            'active' => true
        ]); 
        events::create([
            'title' => 'Kids Education Expo 2024',
            'venue' => 'The Westin',
            'date' => '2024-10-21',
            'start_time' => '09:00:00',
            'description' => 'An educational expo for kids.',
            'booking_url' => null,
            'tags' => 'education,kids',
            'organizer_events_id' => 2,
            'category_events_id' => 1,
            'active' => true
        ]); 
        events::create([
            'title' => 'Surabaya Great Expo 2024',
            'venue' => 'Grand City Surabaya',
            'date' => '2024-10-16',
            'start_time' => '08:00:00',
            'description' => 'The greatest expo in Surabaya.',
            'booking_url' => null,
            'tags' => 'expo,surabaya',
            'organizer_events_id' => 3,
            'category_events_id' => 1,
            'active' => true
        ]); 
        events::create([
            'title' => 'SMEX (Surabaya Music, Multimedia, and Lighting Expo 2024)',
            'venue' => 'Grand City Surabaya',
            'date' => '2024-09-29',
            'start_time' => '08:00:00',
            'description' => 'A music and multimedia expo.',
            'booking_url' => null,
            'tags' => 'music,multimedia',
            'organizer_events_id' => 4,
            'category_events_id' => 1,
            'active' => true
        ]); 
        events::create([
            'title' => 'Japan Edu Expo 2024',
            'venue' => 'Hotel Said',
            'date' => '2024-09-22',
            'start_time' => '08:00:00',
            'description' => 'An educational expo focused on Japan.',
            'booking_url' => null,
            'tags' => 'education,japan',
            'organizer_events_id' => 5,
            'category_events_id' => 1,
            'active' => true,
        ]); 
        events::create([
            'title' => 'Surabaya Hospital Expo 2024',
            'venue' => 'Grand City Surabaya',
            'date' => '2024-10-11',
            'start_time' => '08:00:00',
            'description' => 'A health-focused expo.',
            'booking_url' => null,
            'tags' => 'health,expo',
            'organizer_events_id' => 6,
            'category_events_id' => 1,
            'active' => true
        ]); 
        
    }
}
