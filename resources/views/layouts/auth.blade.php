<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection ('title') @yield('title') @else {{ config('app.name') }} @endif</title>

    <!-- Styles -->
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet"></head>

    <!-- Scripts -->
    <script src="{{ mix('js/admin.js') }}" defer></script>
<body>
    <main class="bg-primary">
        @yield('content')
    </main>
</body>
</html>