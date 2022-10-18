@extends('layouts.user')
@section('title', 'Profile')
@section('content')

<section class="bg-gray-50 md:py-20 min-h-screen">
    <div class="mx-auto bg-transparent md:bg-white border-0 md:border px-4 md:px-6 border-gray-300 mb-0 rounded-md py-10 w-full sm:w-10/12 md:w-8/12 lg:w-6/12">
        <h1 class="text-center mb-2 text-xl font-bold">Profile</h1>
        <form class="space-y-2">
            <label class="block text-sm">Firstname:</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" value="{{ auth()->user()->firstname }}" disabled>

            <label class="block text-sm">Lastname:</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" value="{{ auth()->user()->lastname }}" disabled>

            <label class="block text-sm">Phone:</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" value="{{ auth()->user()->phone }}" disabled>

            <label class="block text-sm">Address:</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" value="{{ auth()->user()->address }}" disabled>

            <label class="block text-sm">Email:</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" value="{{ auth()->user()->email }}" disabled>
        </form>
    </div>
</section>

@endsection
