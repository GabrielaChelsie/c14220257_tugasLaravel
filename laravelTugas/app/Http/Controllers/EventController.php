<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Mengambil semua data event
        $events = Event::all();

        // Mengirim data ke view home.blade.php
        return view('home', compact('events'));
    }
}
