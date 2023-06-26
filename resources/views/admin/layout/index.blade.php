<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noah COOP | @yield('page_title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="w-full flex min-h-screen overflow-hidden">
        <div
            class="w-[4rem] md:w-[15rem] h-screen bg-green-950 overflow-hidden hover:overflow-y-auto fixed z-20 scrollbar-styled">
            @include('admin/layout/partials/sidebar')
        </div>
        <div class="ml-[4rem] md:ml-[15rem] flex-1 mr-auto bg-gray-200 overflow-y-auto">
            @include('admin/layout/partials/header')
            <div class="pt-[64px]">
                @yield('content')
            </div>
            @include('admin/layout/partials/footer')
        </div>
    </div>
</body>

</html>
