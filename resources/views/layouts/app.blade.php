<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <x-navbar />
    <div class="content">
        @yield('content')
    </div>
    <x-footer />
</body>
</html>