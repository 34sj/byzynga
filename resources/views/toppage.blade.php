<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/ts/app.ts'])
    <title>Laravel</title>
</head>

<body>
    <div class="container mx-auto py-4">
        <h1 class="text-4xl border-l-4 border-sky-400 font-bold pl-2 my-4">tailwindcss sample</h1>
    </div>
</body>

</html>
