<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body class="antialiased">
    <form id="form" method="POST">
        @csrf
        <label for="message">Message</label>
        <input type="text" name="message" id="message">
    </form>
</body>

</html>