<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'theme-dark': dark }" x-data="data()"
    lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('main/assets/logo/favicon.png') }}" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <title>{{ $title ?? config('app.name') }}</title>
    <script>
        let theme = localStorage.getItem('dark');
        if (theme == "true") {
            document.getElementsByTagName('html')[0].classList.add('dark');
        }
    </script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset('main/js/init-alpine.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    @if ($auth === true)
        <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
            <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
                <div class="flex flex-col overflow-y-auto md:flex-row">

                    <div class="h-32 md:h-auto md:w-1/2">
                        <img aria-hidden="true" class="object-cover w-full h-full"
                            src="{{ asset('main/assets/auberge.webp') }}" alt="Office">
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900 " :class="{ 'overflow-hidden': isSideMenuOpen }">
            <x-navigation.desktop />
            <x-navigation.mobile />

            <div class="flex flex-col flex-1 w-full">
                <x-partials.header />
                <main class="h-full overflow-y-auto pb-14">
                    <div class="px-6">
                        {{ $contentHeading ?? '' }}

                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    @endif

    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    @include('sweetalert::alert')
    {{ $scripts ?? '' }}

    @livewireScripts
    
    <script>
         $(document).ready(function() {
            $('.simple-select').select2();
            $('.multiple-select').select2();
        });
    </script>
</body>

</html>