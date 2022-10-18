@extends('layouts.app')
@section('title', 'Register')
@section('content')

<section class="bg-gray-50">
    <div class="mx-auto px-4 py-20 max-w-7xl">
        <div class="w-full mx-auto px-0 pt-5 pb-6 mt-4 mb-0 space-y-4 border-0 border-gray-300 rounded-md bg-transparent md:bg-white md:border md:px-6 sm:mt-8 sm:mb-5 sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
            <h1 class="text-xl mb-5 font-light sm:text-center">Register to get started</h1>
            <form class="pb-1 space-y-4" method="POST" action={{ url('/register') }}>
                @csrf
                <label class="block">
                    <span class="block text-xs font-medium">First Name:</span>
                </label>
                @error('firstname')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] focus:border-[#70ce91] @error('firstname') border-red-500 @enderror" type="text" name="firstname" placeholder="Enter your first name" value="{{ old('firstname') }}">

                <label class="block">
                    <span class="block text-xs font-medium">Last Name:</span>
                </label>
                @error('lastname')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] focus:border-[#70ce91] @error('lastname') border-red-500 @enderror" type="text" name="lastname" placeholder="Enter your last name" value="{{ old('lastname') }}">

                <label class="block">
                    <span class="block text-xs font-medium">Phone:</span>
                </label>
                @error('phone')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] focus:border-[#70ce91] @error('phone') border-red-500 @enderror" type="tel" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">

                <label class="block">
                    <span class="block text-xs font-medium">Address:</span>
                </label>
                @error('address')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] focus:border-[#70ce91] @error('address') border-red-500 @enderror" type="ttelext" name="address" placeholder="Enter your address" value="{{ old('address') }}">

                <label class="block">
                    <span class="block text-xs font-medium">Email address:</span>
                </label>
                @error('email')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] focus:border-[#70ce91] @error('email') border-red-500 @enderror" type="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}">

                <label class="block">
                    <span class="block text-xs font-medium">Enter your password:</span>
                </label>
                @error('password')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] focus:border-[#70ce91] @error('password') border-red-500 @enderror" type="password" name="password" placeholder="Enter your password">

                <label class="block">
                    <span class="block text-xs font-medium">Password Confirmation:</span>
                </label>
                @error('password_confirmation')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] focus:border-[#70ce91] @error('password_confirmation') border-red-500 @enderror" type="password" name="password_confirmation" placeholder="Confirm your password">

                <div class="flex items-center justify-center">
                    <input class="w-full sm:w-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" value="Create an account">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
