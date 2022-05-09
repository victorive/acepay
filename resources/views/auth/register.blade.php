@extends('layouts.guest')
@section('title', 'Register')
@section('content')

<section class="bg-gray-50">
    <div class="mx-auto px-4 py-20 max-w-7xl">
        <div class="w-full mx-auto px-0 pt-5 pb-6 mt-4 mb-0 space-y-4 border-0 border-gray-300 rounded-md bg-transparent md:bg-white md:border md:px-6 sm:mt-8 sm:mb-5 sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
            <h1 class="text-xl mb-5 font-light sm:text-center">Register to get started</h1>
            <form class="pb-1 space-y-4">
                <label class="block">
                    <span class="block mb-1 text-xs font-medium">First Name:</span>
                </label>
                <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3 min-h-[39px] hover:border-[#70ce91]" type="text" name="" placeholder="Enter your first name">
                
                <label class="block">
                    <span class="block mb-1 text-xs font-medium">Last Name:</span>
                </label>
                <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3 min-h-[39px] hover:border-[#70ce91]" type="text" name="" placeholder="Enter your last name">

                <label class="block">
                    <span class="block mb-1 text-xs font-medium">Email address:</span>
                </label>
                <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3 min-h-[39px] hover:border-[#70ce91]" type="email" name="" placeholder="Enter your email address">

                <label class="block">
                    <span class="block mb-1 text-xs font-medium">Enter your password:</span>
                </label>
                <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3 min-h-[39px] hover:border-[#70ce91]" type="password" name="" placeholder="Enter your password">

                <label class="block">
                    <span class="block mb-1 text-xs font-medium">Password Confirmation:</span>
                </label>
                <input class="block w-full border border-gray-300 rounded-md text-sm py-2 px-3 min-h-[39px] hover:border-[#70ce91]" type="password" name="" placeholder="Confirm your password">

                <div class="flex items-center justify-center">
                    <input class="w-full sm:w-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" name="" value="Create an account">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection