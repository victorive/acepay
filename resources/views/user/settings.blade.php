@extends('layouts.user')
@section('title', 'Settings')
@section('content')

<section class="bg-gray-50 md:py-20 min-h-screen">
    <div class="mx-auto bg-transparent md:bg-white border-0 md:border px-4 md:px-6 border-gray-300 mb-0 rounded-md py-10 w-full sm:w-10/12 md:w-8/12 lg:w-6/12">
        @if(session('success'))
        <p class="md:text-center text-[#70ce91]">
            {{ session('success') }}
        </p>
        @endif

        <h1 class="text-center mb-2 text-xl font-bold">Settings</h1>
        <form action={{ url('/settings') }} method="POST" class="space-y-3">
        @csrf
        @method('PUT')
            <div class="grid grid-cols-2 gap-3 mb-4">
                <label class="block text-sm">Current Password:
                    @error('current_password')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror

                    <input name="current_password" class="block w-full border rounded-md text-sm py-2 px-3 @error('current_password') border-red-500 @enderror" type="password" placeholder="Enter current password">
                </label>

                <label class="block text-sm">New Password:
                    @error('new_password')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror

                    <input name="new_password" class="block w-full border rounded-md text-sm py-2 px-3 @error('new_password') border-red-500 @enderror" type="password" placeholder="Enter new password">
                </label>
            </div>

            <input class="block mx-auto rounded-md text-sm py-2 px-4 bg-[#70ce91] text-white cursor-pointer hover:bg-[#3b9b5c]" type="submit" value="Save Changes">
        </form>
    </div>
</section>

@endsection
