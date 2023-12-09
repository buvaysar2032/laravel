@extends('layouts.site')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="h3 mb-2 text-gray-800">Carousel Details</h4>
            <div class="card-header-action">
                <a href="{{ route('carousel.index') }}" class="btn btn-primary">Back to Carousel</a>
            </div>
        </div>

        <div class="card-body">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Carousel Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td><strong>Title:</strong></td>
                                        <td>{{ $carousel->title }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Description:</strong></td>
                                        <td>{{ $carousel->description }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Image:</strong></td>
                                        <td>
                                            <img src="{{ asset('storage/carousel/' . $carousel->img) }}"
                                                alt="{{ $carousel->title }}" class="img-thumbnail"
                                                style="max-width: 200px;">
                                        </td>
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
