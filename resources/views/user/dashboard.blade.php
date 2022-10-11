@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')

<section class="bg-gray-50">
    <div class="mx-auto px-4 py-10 max-w-7xl">
        <div class="w-full mx-auto px-0 pt-5 pb-6 mt-4 border-0 md:border border-gray-300 rounded-md bg-transparent md:bg-white md:px-6 sm:mt-8 sm:mb-5 sm:w-11/12 md:w-10/12">
            <h1 class="text-xl font-medium text-center">Balance:</h1>
            <p class="text-xl font-bold text-center">₦5,000,000.00</p>

            <div id="payment-buttons" class="grid grid-cols-2 sm:grid-cols-4 gap-3 mx-auto pt-4 mb-4">
                <a id="default-button" href="#first-option" class="w-auto text-center rounded-md bg-[#70ce91] hover:bg-[#3b9b5c] text-white py-2 px-2 cursor-pointer">Send Funds</a>
                <a href="#second-option" class="w-auto text-center rounded-md bg-[#70ce91] hover:bg-[#3b9b5c] text-white py-2 px-2 cursor-pointer">Receive Funds</a>
                <a href="#third-option" class="w-auto text-center rounded-md bg-[#70ce91] hover:bg-[#3b9b5c] text-white py-2 px-2 cursor-pointer">Deposit Funds</a>
                <a href="#fourth-option" class="w-auto text-center rounded-md bg-[#70ce91] hover:bg-[#3b9b5c] text-white py-2 px-2 cursor-pointer">Withdraw Funds</a>
            </div>

            <div class="mt-10 bg-transparent md:bg-white" id="button-options">
                @include('fund.send')

                @include('fund.receive')

                @include('fund.deposit')

                @include('fund.withdraw')
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

            @include('fund.transactions')
        </div>
    </div>
</section>
@endsection
