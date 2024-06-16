<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-gray-700 flex items-center justify-center min-h-screen">
        <div class="calculator bg-red-200 p-6 rounded-lg shadow-lg">
            <form method="post" action="/calculate" class="space-y-4">
                <span class="text-xs  font-bold font-sans md:font-arial text-gray-400">Kelompok 1</span>
                @csrf
                <input type="text" name="display" class="display w-full p-3 text-right  text-2xl  backdrop-blur-sm rounded-lg shadow-lg border-7" readonly value="{{ session('display', '') }}">
                <div class="grid grid-cols-4 gap-4 text-gray-500 ">
                    @foreach (['1', '2', '3', '+', '4', '5', '6', '-', '7', '8', '9', '*', '0', '.', 'C', '/', '='] as $button)
                    <button type="submit" name="button" value="{{ $button }}" class="p-4 backdrop-blur-sm shadow-lg text-white rounded-lg">{{ $button }}</button>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</body>

</html>