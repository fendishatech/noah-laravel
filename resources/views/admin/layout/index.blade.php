<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noah COOP | @yield('page_title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full flex min-h-screen">
        <div class="w-[4rem] md:w-[15rem] bg-gray-100">
            <!-- Sidebar -->
            <h1>Sidebar</h1>
        </div>
        <div class="flex-1 bg-gray-200">
            @include('admin/layout/partials/header')
            <div class="pt-[64px]">
                @yield('content')
            </div>
            @include('admin/layout/partials/footer')
        </div>
    </div>
</body>

</html>
