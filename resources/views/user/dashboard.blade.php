@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')

<section class="bg-gray-50">
    <div class="mx-auto px-4 py-10 max-w-7xl min-h-screen">
        <div class="w-full mx-auto pt-5 pb-6 mt-4 border-0 md:border border-gray-300 rounded-md bg-transparent md:bg-white md:px-6 sm:mt-8 sm:mb-5 sm:w-11/12 md:w-8/12">

            <h1 class="text-xl font-bold text-center">Make a test payment</h1>

            @if (session('success'))
            <p class="text-sm text-[#70ce91] md:text-center">
                {{ session('success') }}
            </p>
            @endif

            @if (session('failed'))
            <p class="text-sm text-red-500 md:text-center">
                {{ session('failed') }}
            </p>
            @endif

            <div class="mt-10 bg-transparent md:bg-white">
                @include('user.pay')
            </div>

            <div class="flex justify-between border-t-[1px] border-gray-200 border-solid py-4 relative">
                <h2>Recent Transactions</h2>

                <button onclick="toggleDuration()">
                    <div class="h-4 w-4">
                        <img src="{{ asset('images/downarrow.svg') }}">
                    </div>
                </button>

                <div id="duration-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[20px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Yesterday</a>
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">This week</a>
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">This month</a>
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">All time</a>
                </div>
            </div>

            @include('user.transactions')
        </div>
    </div>
</section>
@endsection
