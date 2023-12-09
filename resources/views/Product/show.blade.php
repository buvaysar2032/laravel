@extends('layouts.site')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="h3 mb-2 text-gray-800">Product Details</h4>
            <div class="card-header-action">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
            </div>
        </div>

        <div class="card-body">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Product Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td><strong>Title:</strong></td>
                                        <td>{{ $product->title }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Description:</strong></td>
                                        <td>{{ $product->desc }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Image:</strong></td>
                                        <td>
                                            <img src="{{ asset('storage/products/' . $product->img) }}" alt="{{ $product->title }}"
                                                class="img-thumbnail" style="max-width: 200px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Price:</strong></td>
                                        <td>${{ $product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Discount:</strong></td>
                                        <td>{{ $product->discount }}%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Count:</strong></td>
                                        <td>{{ $product->count }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Category:</strong></td>
                                        <td>{{ $product->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Created At:</strong></td>
                                        <td>{{ $product->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Updated At:</strong></td>
                                        <td>{{ $product->updated_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
