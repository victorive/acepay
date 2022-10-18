<table class="table-auto border-collapse w-full">
    <thead class="">
        <tr class="border-b  text-sm border-gray-200">
            <th scope="col" class="text-left">S/N</th>
            <th scope="col" class="">Trx. ID</th>
            <th scope="col" class="">Trx. Reference</th>
            <th scope="col" class="">Amount</th>
            <th scope="col" class="">Currency</th>
            <th scope="col" class="">Trx. Status</th>
            <th scope="col" class="text-right md:text-center">Date</th>
        </tr>
    </thead>

    <tbody>
    @foreach($transactions as $transaction)
        <tr class="border-b border-gray-200">
            <td class="text-center py-2 text-sm">{{ $transaction->id}}</td>
            <td class="text-center py-2 text-sm">{{ $transaction->transaction_id }}</td>
            <td class="text-center py-2 text-sm">{{ $transaction->transaction_reference }}</td>
            <td class="text-center py-2 text-sm">{{ $transaction->amount }}</td>
            <td class="text-center py-2 text-sm">{{ $transaction->currency }}</td>
            <td class="text-center py-2 text-sm">{{ $transaction->gateway_response }}</td>
            <td class="text-center py-2 text-sm">{{ $transaction->paid_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
