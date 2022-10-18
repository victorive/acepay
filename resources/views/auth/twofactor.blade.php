@extends('layouts.app')
@section('title', 'Two-Factor Authentication')
@section('content')

<section class="bg-gray-50 min-h-screen">
    <div class="flex mx-auto px-4 py-20">
        <div class="mx-auto space-y-2 px-6 py-8 bg-white rounded-lg items-center my-12" id="second-option">
            @if(session('success'))
            <p class="text-sm text-[#70ce91] md:text-center">
                {{ session('success') }}
            </p>
            @endif

            <h2 class="text-center">Enter the token sent to your email</h2>

            <form method="POST" action={{ url('/verify') }} class="space-y-4">
            @csrf
                @error('token')
                <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                @enderror
                <input type="text" inputmode="numeric" pattern="[0-9]*" name="token" class="w-full border border-dashed text-center py-1 rounded-lg bg-[#e3f5e9] @error('token') border-red-500 @enderror" placeholder="Code">

                <input class="block mx-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" value="Proceed">

                <a href="{{ route('verify.resend') }}" class="block text-center text-sm">Resend token here</a>
            </form>
        </div>
    </div>
</section>
@endsection
