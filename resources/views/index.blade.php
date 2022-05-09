@extends('layouts.guest')
@section('title', 'Home')
@section('content')

<section class="px-4 py-10" >
    <div class="grid w-full grid-cols-1 md:grid-cols-12 gap-0 mx-auto lg:grid-cols-11 lg:gap-24 xl:w-11/12">
        <div class="col-auto text-center md:col-span-7 lg:text-left self-center">
            <h1 class="text-3xl font-bold md:text-3xl leading-tight md:leading-none tracking-tight md:tracking-normal mb-5">Make payments online, in-person, everywhere.</h1>
            <a class="w-full sm:w-auto rounded-md text-lg py-2 px-4 bg-[#70ce91] text-white" href="{{ route('login') }}">Get Started</a>
        </div>
        <div class="col-auto md:col-span-4">
            <img src="{{ asset('images/acepay2.svg')}}">
        </div>
    </div>
</section>

@endsection