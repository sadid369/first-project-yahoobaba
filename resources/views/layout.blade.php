<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    @stack('style')
    <title>@yield('title', 'website')</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/post">Post</a>
        <a href="/about">About</a>

    </nav>
    <br>
    <br>
    @hasSection('content')
        @yield('content')
    @else
        <h1>No Content</h1>
    @endif
    @section('sidebar')
        this is side bar
    @show

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>This is footer</footer>

    @stack('scripts')
</body>

</html>
