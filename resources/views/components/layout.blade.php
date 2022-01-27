<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tegners förskola</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans text-lg md:text-base antialiased bg-green-100">
        <section class="flex flex-col justify-between min-h-screen">
            @include('layouts.navigation')
            <main class="flex flex-col flex-grow max-w-5xl w-screen mx-auto p-4 mt-6 mb-12 lg:p-0">
                {{ $slot }}
            </main>
            @include('layouts.footer')
        </section>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
