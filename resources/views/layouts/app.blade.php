<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ACEpay - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <div class="flex flex-wrap mx-auto px-6 py-2 w-full justify-between items-center bg-white text-black border-b border-gray-200">
                <a class="flex items-center" href="{{ url('/') }}">
                   <img class="w-14 h-14" src="{{ asset('images/acepay.svg') }}" alt="acepay">
                   <h2 class="font-bold text-xl">ACEpay</h2>
                </a>

                @guest
                <svg onclick="toggleMenu()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>

                <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                    <ul class="pt-4 md:pt-0 md:flex md:justify-between">
                        <li><a href="{{ url('/') }}" class="md:px-4 py-1 block">Home</a></li>
                        <li><a href="{{ route('login') }}" class="md:px-4 py-1 block">Pay</a></li>
                        <li><a href="{{ route('login') }}" class="md:px-4 py-1 block">Login</a></li>
                        <li><a href="{{ route('register') }}" class="md:px-4 py-1 block">Signup</a></li>
                    </ul>
                </div>
                @endguest

                @auth
                <div>
                    <button onclick="toggleProfile()" class="rounded-full p-0 inline-block text-center align-middle text-sm">
                        <div class="h-8 text-sm w-8 max-h-[2rem] max-w-[2rem] min-h-[2rem] min-w-[2rem] rounded-full items-center justify-center relative">
                            <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
                        </div>
                    </button>

                    <div id="profile-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[45px] border border-gray-200 w-40 p-2 z-10 ">
                        <p class="w-full font-bold text-xs uppercase tracking-widest">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>
                        <a href="{{ route('dashboard') }}" class="w-full relative flex items-center font-medium text-sm px-1 py-2 rounded hover:bg-[#e3f5e9]">Dashboard</a>
                        <a href="{{ route('profile') }}" class="w-full relative flex items-center font-medium text-sm px-1 py-2 rounded hover:bg-[#e3f5e9]">Profile</a>
                        <a href="{{ route('notifications') }}" class="w-full relative flex items-center font-medium text-sm px-1 py-2 rounded hover:bg-[#e3f5e9]">Notifications</a>
                        <a href="{{ route('settings') }}" class="w-full relative flex items-center font-medium text-sm px-1 py-2 rounded hover:bg-[#e3f5e9]">Settings</a>

                        <form action="{{ route('logout') }}" method="POST" class="flex hover:bg-[#e3f5e9] rounded-md text-sm">
                        @csrf
                            <button type="submit" class="inline-flex px-2 py-1 font-medium">Logout</button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </header>

        @yield('content')

        <footer class="px-4 py-8 mx-auto border-t border-gray-200">
            <div class="flex justify-center items-center" >
                <p>Copyright &copy; {{ date('Y'); }}. All rights reserved.</p>
            </div>
        </footer>

        @yield('script')

        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
