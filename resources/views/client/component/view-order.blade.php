<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Giá</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Tổng tiền</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($orders))
        @foreach($orders as $key => $order)
            @php($price = $order->price * (100-$order->sale)/100)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>
                    <a target="_blank" href="{{ isset($order->product->name) ? route('get.single.product',[$order->product->slug, $order->product->id]) : '' }}">{{ isset($order->product->name) ? $order->product->name : '[N/A]' }}</a>
                </td>
                <td>
                    <img width="100px" src="{{ isset($order->product->image) ?  asset('storage/'.$order->product->image) : '[N/A]' }}" alt="">
                </td>
                <td>{{ number_format($price,0,',','.') }}đ</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ number_format($price*$order->quantity,0,',','.') }}đ</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
