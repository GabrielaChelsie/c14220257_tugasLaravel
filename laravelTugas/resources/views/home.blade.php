<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event</title>
        @vite('resources/css/app.css')
    </head>
   <body class=" bg-gradient-to-br from-blue-800 via-red-400 to-sky-600">
        <!-- Include Navbar -->
        @include('navbar')
        <div class="mt-8 mx-5 px-4">
            <h2 class="text-xl font-bold text-white">Event Pilihan</h2>
            <div class=" grid grid-cols-3 gap-4 mt-4 mx-4">
                <!-- Event Card 1 -->
                <div class=" flex flex-wrap bg-slate-200 p-4 rounded-lg shadow-lg">
                    <div class=" basis-1/2 m-auto">
                    <img src="https://via.placeholder.com/150" alt="Ghostival by MoT" class="rounded-lg mb-2 size-full">
                    </div>
                    <div class=" m-auto">
                    <h3 class="font-bold text-lg">Ghostival by MoT</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo quae possimus saepe eaque ducimus illo, laborum dignissimos cupiditate ullam quia rem sit perspiciatis voluptatem distinctio vero eveniet in vitae ipsum!</p>
                    <p>15 Jun - 31 Jul 2023</p>
                    <p class="text-red-500 line-through">Rp 149.000</p>
                    <p class="font-bold">Rp 126.000</p>
                    </div>
                </div>
                <!-- Event Card 2 -->
                <div class="flex flex-wrap bg-slate-200 p-4 rounded-lg shadow-lg">
                    <div class="basis-1/2 m-auto">
                        <img src="https://via.placeholder.com/150" alt="Glenn Fredly: 25 Years of Music" class="rounded-lg mb-2 size-full">
                    </div>
                    <div class="m-auto">
                        <h3 class="font-bold text-lg">Glenn Fredly: 25 Years of Music</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo quae possimus saepe eaque ducimus illo, laborum dignissimos cupiditate ullam quia rem sit perspiciatis voluptatem distinctio vero eveniet in vitae ipsum!</p>
                        <p>24 Jun 2023</p>
                        <p class="font-bold">Rp 900.000</p>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="flex flex-wrap bg-slate-200 p-4 rounded-lg shadow-lg">
                    <div class="basis-1/2 m-auto">
                        <img src="https://via.placeholder.com/150" alt="CHERRYPOP 2023" class="rounded-lg mb-2 size-full">
                    </div>
                    <div class="m-auto">
                        <h3 class="font-bold text-lg">CHERRYPOP 2023</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo quae possimus saepe eaque ducimus illo, laborum dignissimos cupiditate ullam quia rem sit perspiciatis voluptatem distinctio vero eveniet in vitae ipsum!</p>
                        <p>19 Aug - 20 Aug 2023</p>
                        <p class="font-bold">Rp 150.000</p>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="flex flex-wrap bg-slate-200 p-4 rounded-lg shadow-lg">
                    <div class="basis-1/2 m-auto">
                        <img src="https://via.placeholder.com/150" alt="PERSAJA CREATIVE UMKM EXPO" class="rounded-lg mb-2 size-full">
                    </div>
                    <div class="m-auto">
                        <h3 class="font-bold text-lg">PERSAJA CREATIVE UMKM EXPO</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo quae possimus saepe eaque ducimus illo, laborum dignissimos cupiditate ullam quia rem sit perspiciatis voluptatem distinctio vero eveniet in vitae ipsum!</p>
                        <p>01 Jul 2023</p>
                        <p class="font-bold">Rp 500.000</p>
                    </div>
                </div>
            </div>
        </div>
   </body>
</html>
