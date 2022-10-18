@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

<section class="bg-gray-50 min-h-screen">
    <div class="mx-auto px-4 py-20 max-w-7xl">
        <div class="w-full mx-auto px-0 pt-5 pb-6 mt-4 mb-0 space-y-4 border-0 border-gray-300 rounded-md bg-transparent md:bg-white md:border md:px-6 sm:mt-8 sm:mb-5 sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
            <h1 class="text-xl mb-5 font-light sm:text-center">Forgot password?</h1>
            @if (session('success'))
            <p class="text-sm text-[#70ce91] md:text-center">
                {{ session('success') }}
            </p>
            @endif

            <form action={{ url('/forgotpassword') }} method="POST" class="pb-1 space-y-4">
             @csrf
                <label class="block">
                    <span class="block mb-1 text-xs font-medium">Email address:</span>
                </label>
                @error('email')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input class="block w-full border rounded-md text-sm py-2 px-3 min-h-[39px] hover:border-[#70ce91] @error('email') border-red-500 @enderror" type="email" name="email" placeholder="Enter your email address" value="{{ old('email')}}">

                <div class="flex items-center justify-center">
                    <input class="w-full sm:w-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" value="Forgot password">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

