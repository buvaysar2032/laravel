@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1>Order Details</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a href="{{ route('orders.index') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>{{$order->name}}</h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Products Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->products as $product)
                                    <tr>
                                        <td>{{ $product['name'] }}</td>
                                        <td>{{ $product['quantity'] }}</td>
                                        <td>${{ $product['price'] }}</td>
                                        <td>${{ $product['quantity'] * $product['price'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Total Price: ${{ $order->total_price }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
