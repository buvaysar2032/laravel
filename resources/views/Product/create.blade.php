@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1>Create Product</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a href="{{ route('products.index') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
        <div class="col-12">
            <div class="card">
                <form class="needs-validation" autocomplete="off" action="{{ route('products.store') }}" method="post"
                    enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                required="" placeholder="Title">
                            <div class="invalid-feedback">
                                What's the product title?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="desc" value="{{ old('desc') }}" class="form-control"
                                required="" placeholder="Description">
                            <div class="invalid-feedback">
                                What's the product description?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img" class="form-control" required="">
                            <div class="invalid-feedback">
                                Oh no! Image is invalid.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" value="{{ old('price') }}" class="form-control"
                                required="" placeholder="Price">
                            <div class="invalid-feedback">
                                What's the price?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="number" name="discount" value="{{ old('discount') }}" class="form-control"
                                placeholder="Discount">
                        </div>
                        <div class="form-group">
                            <label>Count</label>
                            <input type="number" name="count" value="{{ old('count') }}" class="form-control"
                                placeholder="Count">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Select a category.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
