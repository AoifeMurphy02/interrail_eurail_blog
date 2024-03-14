<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> All Aboard Europe </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-teal-700 py-4">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 72 72"><g stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"><circle cx="36" cy="36" r="28" fill="#92d3f5"/><path fill="#b1cc33" d="M49.44 11.43c-.539.906-1.645 2.143-2.44 2.57c-1.245.67-1.904.267-3 1c-1.269.848-1.21 1.938-2 2c-.802.063-.688-1.993-1-3c-.452-1.458-.23-1.527-1-2c-1.083-.666-3.212-1.05-5 0c-.71.417-.75.682-3 4c-1.71 2.522-2.188 3.11-2 4c.199.942.043 1.747 1 2c1.187.313 1.366-.272 2-1c1.328-1.525 2.358-3.783 3-4c.571-.193 2.066 1.35 2 3c-.046 1.165-.852 1.922-2 3c-.742.697-2.875 1.5-6 2c-1.719.275-1.408.852-2.062 1.594c-.843.955-.462 2.169-1.282 3.312c-1.025 1.43-3.472 1.792-3.656 2.72c-.157.79 1.96 1.358 3 1.374c.85.013 1.064-.772 3-2c.74-.47 1.75-1.281 2.688-1.25c.504.017 1.828.285 2.343.719c.594.5-.156 1.844-.406 3.156s-2.897 1.865-3.854 2.02c-1.574.258-4.144-.522-5.604.938c-1 1-1.116 1.766-1.167 3.417c-.013.417.937 3.032 2 4c1.144 1.042 2.294-.836 4 0c1.746.855 2.493 2.729 3 4c.508 1.273.176 1.168 1 5c.415 1.927.32 1.12 1 4c.563 2.383.589 2.768 1 3c1.173.663 3.9-.816 5-3c.69-1.368.211-1.962 1-5c.393-1.512.59-2.268 1-3c1.733-3.086 4.883-3.126 5-5c.08-1.282-1.357-1.851-1-3c.342-1.1 1.81-1.06 2-2c.258-1.275-2.25-2.316-2-3c.282-.775 4.07-1.01 6 1c.64.666.498.978 2 4c1.384 2.785 1.764 3.043 2 3c.429-.078.322-1.135 1-3c.324-.892 1.093-3.006 2-3c.625.004.739 1.01 2 2c.71.558 1.79.88 2.347 1.038c.428-1.945.653-3.965.653-6.038c0-10.631-5.925-19.88-14.653-24.62"/></g><g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"><circle cx="36" cy="36" r="28"/><path d="M49.44 11.43c-.539.906-1.645 2.143-2.44 2.57c-1.245.67-1.904.267-3 1c-1.269.848-1.21 1.938-2 2c-.802.063-.688-1.993-1-3c-.452-1.458-.23-1.527-1-2c-1.083-.666-3.212-1.05-5 0c-.71.417-.75.682-3 4c-1.71 2.522-2.188 3.11-2 4c.199.942.043 1.747 1 2c1.187.313 1.366-.272 2-1c1.328-1.525 2.358-3.783 3-4c.571-.193 2.066 1.35 2 3c-.046 1.165-.852 1.922-2 3c-.742.697-2.875 1.5-6 2c-1.719.275-1.408.852-2.062 1.594c-.843.955-.462 2.169-1.282 3.312c-1.025 1.43-3.472 1.792-3.656 2.72c-.157.79 1.96 1.358 3 1.374c.85.013 1.064-.772 3-2c.74-.47 1.75-1.281 2.688-1.25c.504.017 1.828.285 2.343.719c.594.5-.156 1.844-.406 3.156s-2.897 1.865-3.854 2.02c-1.574.258-4.144-.522-5.604.938c-1 1-1.116 1.766-1.167 3.417c-.013.417.937 3.032 2 4c1.144 1.042 2.294-.836 4 0c1.746.855 2.493 2.729 3 4c.508 1.273.176 1.168 1 5c.415 1.927.32 1.12 1 4c.563 2.383.589 2.768 1 3c1.173.663 3.9-.816 5-3c.69-1.368.211-1.962 1-5c.393-1.512.59-2.268 1-3c1.733-3.086 4.883-3.126 5-5c.08-1.282-1.357-1.851-1-3c.342-1.1 1.81-1.06 2-2c.258-1.275-2.25-2.316-2-3c.282-.775 4.07-1.01 6 1c.64.666.498.978 2 4c1.384 2.785 1.764 3.043 2 3c.429-.078.322-1.135 1-3c.324-.892 1.093-3.006 2-3c.625.004.739 1.01 2 2c.71.558 1.79.88 2.347 1.038c.428-1.945.653-3.965.653-6.038c0-10.631-5.925-19.88-14.653-24.62z"/></g></svg><a href="{{ url('/') }}" class="text-lg font-semibold text-orange-300 no-underline">
                        
                        All Aboard Europe  
                    </a>
                </div>
                <nav class="space-x-4 text-orange-300 font-bold py-10">
                    <a class="no-underline hover:underline text-orange-300 font-bold py-10" href="/">Home</a>
                    <a class="no-underline hover:underline text-orange-300 font-bold py-10" href="/blog">Blog</a>
                    <a class="no-underline hover:underline text-orange-300 font-bold py-10" href="/aboutUs" >About Us</a>
                    <a class="no-underline hover:underline text-orange-300 font-bold py-10" href="/map" >Map</a>
                    <a class="no-underline hover:underline text-orange-300 font-bold py-10" href="/gallery" >Gallery</a>
                 
                    @guest
                        <a class="no-underline hover:underline text-orange-300 font-bold py-10" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline text-orange-300 font-bold py-10" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline text-orange-300 font-bold py-10"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                    
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>