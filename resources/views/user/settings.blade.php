@extends('layouts.app')
@section('title', 'Settings')
@section('content')

<section class="bg-gray-50 md:py-20">
    <div class="mx-auto bg-transparent md:bg-white border-0 md:border px-4 md:px-6 border-gray-300 mb-0 rounded-md py-14 w-full sm:w-10/12 md:w-8/12 lg:w-6/12">
        <h1 class="text-center mb-2">Settings</h1>
        <form class="space-y-1">
            <label class="block">Phone</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" type="tel" placeholder="0123456789" readonly>
            <p class="text-sm text-right hover:text-[#70ce91]"><a href="">Edit</a></p>

            <label class="block">Email</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" type="email" placeholder="test@test.com" readonly>
            <p class="text-sm text-right hover:text-[#70ce91]"><a href="">Edit</a></p>

            <label class="block">Password</label>
            <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3" type="password" placeholder="*************" readonly>
        
            <input class="block mx-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" name="" value="Update">
        </form>
    </div>
</section>

@endsection