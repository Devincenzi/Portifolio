<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    
    <body class="font-sans atialiased">
        <div class="min-h-screen bg-slate-900 " id="app">
            @include('layout.navigation')

            <!-- Page Heading -->
            <header class="bg-slate-800 shadow">
                <div class="max-w-7xl mx-auto flex min-h-fit px-4 sm:px-6 lg:px-8">
                    @yield('headerContent')
                </div>
            </header>

            <flash-message-modal class='{{ session("flashMessage") ? "" : "hidden" }}'> 
                @if(session('flashMessage'))
                    {{ session()->pull('flashMessage') }}
                @endif
            </flash-message-modal>

            <!-- Page Content -->
            <main>                
                <div class="py-12 text-slate-100">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <!-- <div class="p-4 bg-slate-800 border-b border-gray-700 shadow-sm sm:rounded-lg"> -->
                            @yield ('content')
                        <!-- </div> -->
                    </div>
                </div>
            </main>
            
            @include('layout.rodape')
        </div>
    </body>
</html>