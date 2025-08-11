<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Laravel Project')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('partials.header')

    <div class="container" style="margin-top: 20px;">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
