<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yo soy frontera</title>
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="relative flex items-center h-52">
        <div class="w-full h-full absolute">
            <img src="/img/fondo.jpg" alt="Background Image" class="w-full h-full object-cover opacity-50">
        </div>
        <div class="absolute bottom-0 right-0 p-4">
            <h1 class="text-green-500 text-4xl text-outline">Un lugar para todos</h1>
            <h1 class="text-white text-4xl font-bold">www.yosoyfrontera.com</h1>
        </div>
        <div class="relative flex justify-between items-center w-full h-full z-10">
            <div class="w-1/3 relative h-full">

                <div class="trapecio-bg absolute inset-0 bg-sky-600 flex justify-center items-center">
                </div>

                <div class="trapecio absolute inset-0 bg-blue-950 flex justify-center items-center">
                    <img src="/img/logo.svg" alt="Logo" class="max-w-[120px] md:max-w-[150px] lg:max-w-[200px] p-4">
                </div>
            </div>
        </div>
    </div>

    <div id="navbar" class="bg-black shadow-xl text-gray-100 py-3.5 shadow md:flex justify-between items-center"></div>

    <div class="container mx-auto px-4 py-8">
    </div>

    @vite('resources/js/app.js')
</body>
</html>
=======
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yo soy frontera</title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>

>>>>>>> 343e10350b4f01b0aea4a03df4f8c9a9e282e566
