@extends('layouts.app')
@section('title', 'Failed')
@section('content')

<section>
    <div class="mt-10 flex">
        <div class="mx-auto space-y-2 px-6 py-8 bg-white rounded-lg items-center my-12" id="second-option">
            <h2 class="text-center">Failed!</h2>

            <img class="block mx-auto" src="{{ asset('images/failed.svg') }}">
        </div>
    </div>
</section>
@endsection