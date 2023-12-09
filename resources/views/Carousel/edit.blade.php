@extends('layouts.site')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="h3 mb-2 text-gray-800">Edit Carousel</h4>
            <div class="card-header-action">
                <a href="{{ route('carousel.index') }}" class="btn btn-primary">Back to Carousel</a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', $carousel->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" id="description" class="form-control" 
                                value="{{ old('description', $carousel->description) }}" required>
                            @error('number')
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
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update Carousel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
