<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <h1>Fitness A.Y</h1>
        <a href="{{ route('main.accueil') }}">Accueil</a>
        <a href="{{ route('main.Cours') }}">Cours</a>
        <a href="{{ route('main.Tarifs') }}">Tarifs</a>
        <a href="{{ route('main.Contact') }}">Contacts</a>
        <a href="{{ route('main.mentions-legales') }}">Mentions Legales</a>
    </header>
    @yield('content')
    <footer>
        <a href="{{ route('main.mentions-legales') }}">Mentions Legales</a>
    </footer>

</body>

</html>
