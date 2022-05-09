@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

<section>
    <div class="mt-10 flex">
        <div class="mx-auto space-y-2 px-6 py-8 bg-white rounded-lg items-center my-12" id="second-option">
            <h2 class="text-center">Forgot Password?</h2>
            <form class="space-y-2">
                <input type="text" name="" class="w-full border border-gray-300 text-center py-1 rounded-lg" placeholder="Email address">
                <p class="text-sm text-[#70ce91]">A password reset link will be sent your email.</p>

                <input class="block mx-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" name="" value="Proceed">
            </form>
        </div>
    </div>
</section>
@endsection