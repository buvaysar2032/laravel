@extends('layouts.site')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="h3 mb-2 text-gray-800">Edit Product</h4>
            <div class="card-header-action">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', $product->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="desc">Description:</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3"
                                required>{{ old('desc', $product->desc) }}</textarea>
                            @error('desc')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="img">Image:</label>
                            <input type="file" name="img" id="img" class="form-control-file">
                            @error('img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" class="form-control"
                                value="{{ old('price', $product->price) }}" required>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="discount">Discount:</label>
                            <input type="number" name="discount" id="discount" class="form-control"
                                value="{{ old('discount', $product->discount) }}" required>
                            @error('discount')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
