@extends('layouts.admin')
@section('title', 'Push Notification')
@section('content')

<section class="bg-gray-50">
    <div class="mx-auto px-4 py-10 max-w-7xl">
        <div class="w-full mx-auto px-0 pt-5 pb-6 mt-4 border-0 md:border border-gray-300 rounded-md bg-transparent md:bg-white md:px-6 sm:mt-8 sm:mb-5 sm:w-6/12">
            <h2 class="text-center text-lg">Push Notification</h2>
            <form class="space-y-2">
                <textarea cols="30" rows="3" name="" class="w-full border border-gray-300 py-1 px-2 rounded-lg" placeholder="Enter text here"></textarea>
                <p class="text-sm text-[#70ce91]">This notification will be sent to all users.</p>

                <input class="block mx-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" name="" value="Send">
            </form>
        </div>
    </div>
</section>
@endsection