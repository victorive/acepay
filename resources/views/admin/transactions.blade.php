@extends('layouts.admin')
@section('title', 'Transactions')
@section('content')

<section class="bg-gray-50">
    <div class="mx-auto px-6 py-10 max-w-7xl">
        <div class="w-full mx-auto px-0 pt-0 md:pt-5 pb-6 mt-4 border-0 md:border border-gray-300 rounded-md bg-transparent md:bg-white md:px-6 sm:mt-8 sm:mb-5 sm:w-10/12 md:w-11/12">
            
            <div class="flex justify-between relative">
                <h2 class="text-lg">Transactions</h2>

                <button id="transactions-history-button">
                    <div class="h-4 w-4">
                        <img src="{{ asset('images/downarrow.svg') }}">
                    </div>
                </button>

                <div id="transactions-history-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[20px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Yesterday</a>
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">This week</a>
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">This month</a>
                    <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">All time</a>
                </div>
            </div>

            <table class="table-auto w-full bg-transparent md:bg-white leading-normal mt-2 md:shadow-md md:shadow-gray-500/50 flex md:table">
                <thead class="text-sm">
                    <tr class="hidden bg-gray-100 md:table-row">
                        <th class="py-2" scope="col">Name</th>
                        <th class="py-2" scope="col">Amount(₦)</th>
                        <th class="py-2" scope="col">Date</th>
                        <th class="py-2" scope="col">Trx Type</th>
                        <th class="py-2" scope="col">Status</th>
                    </tr>
                </thead>

                <tbody class="flex-1">
                    <tr class="p-1 md:p-3 flex flex-col md:table-row w-full flex-wrap mt-2 md:mt-0 bg-[#eefaf2] md:bg-white  shadow-md shadow-gray-500/50 md:shadow-none md:border-b md:border-b-gray-200">
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Name:</label> 
                            <p class="md:text-center">Test Test</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Amount(₦):</label> 
                            <p class="md:text-center">5,000,000</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Date:</label> 
                            <p class="md:text-center">{{date('d-M-Y')}}</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Trx Type:</label> 
                            <p class="md:text-center">Withdrawal</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Status:</label> 
                            <p class="md:text-center">Successful</p>
                        </td>

                        <div class="relative">
                            <div class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[190px] md:translate-y-[80px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Edit</a>
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Delete</a>
                            </div>
                        </div>
                    </tr>

                    <tr class="p-1 md:p-3 flex flex-col md:table-row w-full flex-wrap mt-2 md:mt-0 bg-[#eefaf2] md:bg-white  shadow-md shadow-gray-500/50 md:shadow-none md:border-b md:border-b-gray-200">
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Name:</label> 
                            <p class="md:text-center">Test Test</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Amount(₦):</label> 
                            <p class="md:text-center">5,000,000</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Date:</label> 
                            <p class="md:text-center">{{date('d-M-Y')}}</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Trx Type:</label> 
                            <p class="md:text-center">Withdrawal</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Status:</label> 
                            <p class="md:text-center">Successful</p>
                        </td>

                        <div class="relative">
                            <div class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[190px] md:translate-y-[80px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Edit</a>
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Delete</a>
                            </div>
                        </div>
                    </tr>

                    <tr class="p-1 md:p-3 flex flex-col md:table-row w-full flex-wrap mt-2 md:mt-0 bg-[#eefaf2] md:bg-white  shadow-md shadow-gray-500/50 md:shadow-none md:border-b md:border-b-gray-200">
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Name:</label> 
                            <p class="md:text-center">Test Test</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Amount(₦):</label> 
                            <p class="md:text-center">5,000,000</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Date:</label> 
                            <p class="md:text-center">{{date('d-M-Y')}}</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Trx Type:</label> 
                            <p class="md:text-center">Deposit</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Status:</label> 
                            <p class="md:text-center">Successful</p>
                        </td>

                        <div class="relative">
                            <div class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[190px] md:translate-y-[80px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Edit</a>
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Delete</a>
                            </div>
                        </div>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    const Thistorybutton = document.getElementById('transactions-history-button');
    const Thistorymenu = document.getElementById('transactions-history-menu');
    Thistorybutton.addEventListener('click', ()=>{
        Thistorymenu.classList.toggle('hidden');
    });
   
</script>
@endsection