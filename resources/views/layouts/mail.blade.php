<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body class="h-full min-h-screen flex flex-col" style="font-family: 'Open Sans'">




    <main>
        {{ $slot }}
    </main>

</body>

</html>
