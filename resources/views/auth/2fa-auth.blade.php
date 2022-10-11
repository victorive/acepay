@extends('layouts.app')
@section('title', '2FA')
@section('content')

<section>
    <div class="mt-10 flex">
        <div class="mx-auto space-y-2 px-6 py-8 bg-white rounded-lg items-center my-12" id="second-option">
            <h2 class="text-center">Enter the token sent to your email</h2>
            <input type="text" name="" class="w-full border border-dashed border-gray-300 text-center py-1 rounded-lg bg-[#e3f5e9]" placeholder="Code">

            <input class="block mx-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" name="" value="Proceed">
        </div>
    </div>
</section>
@endsection