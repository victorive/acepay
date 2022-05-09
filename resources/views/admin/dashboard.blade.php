@extends('layouts.admin')
@section('title', 'Admin')
@section('content')
<section class="bg-gray-50">
    <div class="mx-auto px-4 py-10 max-w-7xl">
        <div class="w-full mx-auto px-0 pt-5 pb-6 mt-4 border-0 md:border border-gray-300 rounded-md bg-transparent md:bg-white md:px-6 sm:mt-8 sm:mb-5 sm:w-11/12 md:w-10/12">
            <h2 class="text-center text-lg">Admin Dashboard</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mx-auto pt-4 mb-4">
                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Users</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Registered Today</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Transactions</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Deposits</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Withdrawals</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Sent</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Received</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e3faeb] text-black py-6 cursor-pointer shadow-md shadow-gray-500/50">
                    <p class="">Push Notifications</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection