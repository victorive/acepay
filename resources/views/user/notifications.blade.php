@extends('layouts.user')
@section('title', 'Notifications')
@section('content')

<section class="bg-gray-50 sm:py-20 min-h-screen">
    <div class="mx-auto bg-transparent sm:bg-white border-0 sm:border px-4 sm:px-6 border-gray-300 mb-0 rounded-md py-10 w-full sm:w-8/12">
        <h1 class="text-center mb-2 text-xl font-bold">Notifications</h1>

        <div class="flex py-2 border-b border-gray-200">
            <div class="h-5 w-5">
                <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
            </div>

            <p class="px-2 text-sm">You received ₦1,000,000 from Test Test</p>
        </div>

        <div class="flex py-2 border-b border-gray-200">
            <div class="h-5 w-5">
                <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
            </div>

            <p class="px-2 text-sm">You received ₦1,000,000 from Test Test</p>
        </div>

        <div class="flex py-2 border-b border-gray-200">
            <div class="h-5 w-5">
                <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
            </div>

            <p class="px-2 text-sm">You received ₦1,000,000 from Test Test</p>
        </div>

        <div class="flex py-2 border-b border-gray-200">
            <div class="h-5 w-5">
                <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
            </div>

            <p class="px-2 text-sm">You received ₦1,000,000 from Test Test</p>
        </div>

        <div class="flex py-2 border-b border-gray-200">
            <div class="h-5 w-5">
                <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
            </div>

            <p class="px-2 text-sm">You received ₦1,000,000 from Test Test</p>
        </div>

    </div>
</section>

@endsection
