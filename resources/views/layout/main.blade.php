<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('tittle')</title>

    @include('layout.partial.link')
    @include('layout.partial.script')
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layout.partial.sidebar')
        <div class="flex flex-col flex-1">
            @include('layout.partial.navbar')
            <h2 class="my-6 ml-4 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                @yield('tittle')
              </h2>
            @yield('content')
        </div>

        @include('layout.partial.footer')
    </div>

</body>

</html>
