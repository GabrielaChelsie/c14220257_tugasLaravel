<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event</title>
        @vite('resources/css/app.css')
    </head>
   <body class=" bg-gradient-to-br bg-fixed bg-no-repeat bg-cover min-h-screen from-blue-800 via-red-400 to-sky-600">
        <!-- Include Navbar -->
        @include('navbar')
        <div class="mt-8 mx-5 px-4">
            <h2 class="text-xl font-bold text-white">Event Pilihan</h2>
            <div class="grid grid-cols-3 gap-4 mt-4 mx-4">
                @if ($events->isEmpty())
                    <p class="text-white">Tidak ada event yang tersedia.</p>
                @else
                    @foreach ($events as $event)
                        <div class="flex flex-wrap bg-slate-200 p-4 rounded-lg shadow-lg">
                            <div class="basis-1/2 m-auto">
                                <img src="{{ $event->image_url ?? 'https://via.placeholder.com/150' }}" alt="{{ $event->title }}" class="rounded-lg mb-2 size-full">
                            </div>
                            <div class="m-auto">
                                <h3 class="font-bold text-lg">{{ $event->title }}</h3>
                                <p>{{ $event->venue }}</p>
                                <p>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }} | {{ $event->start_time }}</p>
                                <p>{{ $event->description }}</p>
                                <p>Tags: {{ $event->tags }}</p>
                                <p class="font-bold">Rp {{ number_format($event->price, 0, ',', '.') }}</p>
                                @if($event->booking_url)
                                    <a href="{{ $event->booking_url }}" target="_blank" class="text-blue-500 underline">Book Now</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
   </body>
</html>
