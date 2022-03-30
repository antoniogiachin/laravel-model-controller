<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- header --}}
    <header>
        <div class="icon">
            <img src="img/logo-social.png" alt="logo-header">
        </div>
        <span>I tuoi film preferiti</span>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>