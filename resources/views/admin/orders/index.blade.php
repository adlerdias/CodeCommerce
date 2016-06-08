@extends('app')

@section('content')
    <div class="container">
        <h1>Orders</h1>
        <br><br>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Items</th>
                <th>Total Amount</th>
                <th>User</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        <b>Items:</b><br>
                        <ul>
                            @foreach($order->items as $item)
                                <li>
                                    {{ $item->product->name }} |
                                    Qtd: {{ $item->quantity }} |
                                    R$: {{ number_format($item->price, 2, ',', '.') }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>R$ {{ number_format($order->total, 2, ',', '.') }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>
                        {!! Form::open(['route'=>['admin.orders.update', $order->id], 'method'=>'put', 'class'=>'form-horizontal']) !!}
                        {!! Form::select('status_id', $statuses, $order->status->id, ['class'=>'form-control', 'style'=>'display: inline-block; width: 110px; float: left; margin-right: 5px;']) !!}
                        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">None found...</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {!! $orders->render() !!}
    </div>
@endsection
