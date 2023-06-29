<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noah COOP | @yield('page_title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    @include('./public/layout/partials/header')
    @yield('content')
    @include('./public/layout/partials/footer')
</body>

</html>
