<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titles', 'coders free')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- fonteawesome --}}
    {{-- tipografia --}}

    @stack('css')

</head>
<body>

    <header></header>

       @yield('content')

    <footer></footer>

</body>
</html>
