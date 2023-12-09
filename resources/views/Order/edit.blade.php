@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1>Edit Order</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a href="{{ route('orders.index') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
        <div class="col-12">
            <div class="card">
                <form class="needs-validation" autocomplete="off" action="{{ route('orders.update', $order->id) }}"
                    method="post" novalidate="">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="d-flex">
                            <h1>{{$order->name}}</h1>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option>{{$order->status}}</option>
                                <option value="pending">Pending</option>
                                <option value="processed">Processed</option>
                                <option value="shipped">Shipped</option>
                                <option value="completed">Completed</option>
                            </select>
                            <div class="invalid-feedback">
                                What's the status?
                            </div>
                        </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Update Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
