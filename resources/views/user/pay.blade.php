<div class="mx-auto space-y-2 px-6 py-4 bg-white rounded-lg items-center my-12 xl:w-8/12">
    @if(session('failed'))
    <p class="text-sm text-red-500 md:text-center">
        {{ session('failed') }}
    </p>
    @endif

    <form  method="POST" action={{ route('pay') }} accept-charset="UTF-8" class="space-y-4">
    @csrf
        <label class="block !-mb-5">Amount (NGN)</label>
        <span class="relative inset-x-2 inset-y-[45px]">₦</span>
        <input class="block w-full border border-gray-300 rounded-md py-1 px-6" name="amount" type="text" inputmode="numeric" pattern="[0-9]*"  placeholder="0.00">

        <label class="block">Email address:</label>
        <input class="block w-full border border-gray-300 rounded-md py-1 px-2" name="email" type="text" placeholder="Enter your email" value="{{ auth()->user()->email }}">

        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">

        <input class="block cursor-pointer w-4/12 mx-auto py-2 bg-[#70ce91] rounded-lg text-white" type="submit" value="Pay">
    </form>
</div>
