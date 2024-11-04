<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Xshop-Dự án</title>
</head>
@include('client.layouts.partials.css')

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <header class="bg-dark sticky-top">
        @include('client.layouts.partials.header')
    </header>

    @yield('content')

    <footer class="text-light">
        @include('client.layouts.partials.footer')
    </footer>
    @include('client.layouts.partials.js')

</body>

</html>