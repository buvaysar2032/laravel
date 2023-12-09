@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1>Create Carousel</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a href="{{ route('carousel.index') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
        
        <div class="col-12">
            <div class="card">
                <form class="needs-validation" autocomplete="off" action="{{ route('carousel.store') }}" method="post"
                    enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                required="" placeholder="Title">
                            <div class="invalid-feedback">
                                What's the title?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control"
                                required="" placeholder="Description">
                            <div class="invalid-feedback">
                                What's the description?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img" class="form-control" required="">
                            <div class="invalid-feedback">
                                Oh no! Image is invalid.
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
