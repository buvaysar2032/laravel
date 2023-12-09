@extends('layouts.site')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="h3 mb-2 text-gray-800">Edit Accordion</h4>
            <div class="card-header-action">
                <a href="{{ route('accordions.index') }}" class="btn btn-primary">Back to Accordion</a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('accordions.update', $accordion->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', $accordion->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="number">Number:</label>
                            <input type="text" name="number" id="number" class="form-control" 
                                value="{{ old('number', $accordion->number) }}" required>
                            @error('number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="form-control"
                                value="{{ old('email', $accordion->email) }}" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" name="location" id="location" class="form-control"
                                value="{{ old('location', $accordion->location) }}" required>
                            @error('location')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update Accordion</button>
                </div>
            </form>
        </div>
    </div>
@endsection
