@if(isset($transaction))
    <td>DH{{ $transaction->id }}</td>
    <td>
        <ul>
            <li>SĐT: {{ $transaction->phone }}</li>
            <li>Địa chỉ: {{ $transaction->adress }}</li>
        </ul>
    </td>
    <td>{{ number_format($transaction->total,0,',','.') }}đ</td>
    <td>
        <span class="badge {{ $transaction->getStatus($transaction->status)['class'] }}">
            {{ $transaction->getStatus($transaction->status)['name'] }}
        </span>
    </td>
    <td class="text-center">
        {{ $transaction->created_at }}
    </td>
    <td>
        <a class="btn btn-secondary show-detail-transaction" onclick="viewOrder(event)" data-status="{{ $transaction->status }}"  href="#" data-id="{{ $transaction->id }}" data-total='{{number_format($transaction->total,0,',','.')}}' data-toggle="modal" data-target="#modal-lg" >view</a>
    </td>
@endif
