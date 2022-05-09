<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ACEpay - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <div class="flex flex-wrap mx-auto px-6 py-2 w-full justify-between items-center bg-white text-black border-b border-gray-200">
                <a class="flex items-center" href="{{ url('/') }}">
                   <img class="w-14 h-14" src="{{ asset('images/acepay.svg') }}" alt="acepay">
                   <h2 class="font-bold text-xl">ACEpay</h2>
                </a>

                <svg id="menu-button" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                
                <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                    <ul class="pt-4 md:pt-0 md:flex md:justify-between">
                        <li><a href="{{ url('/') }}" class="md:px-4 py-1 block">Home</a></li>
                        <li><a href="{{ route('login') }}" class="md:px-4 py-1 block">Pay</a></li>
                        <li><a href="{{ route('login') }}" class="md:px-4 py-1 block">Login</a></li>
                        <li><a href="{{ route('register') }}" class="md:px-4 py-1 block">Signup</a></li>
                    </ul>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="px-4 py-8 mx-auto">
            <div class="flex justify-center items-center" >
                <p>Copyright &copy; {{ date('Y'); }}. All rights reserved.</p>
            </div>
        </footer>

        @yield('script')

        <script>
            const button = document.getElementById('menu-button');
            const menu = document.getElementById('menu')
            button.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        </script>
    </body>
</html>