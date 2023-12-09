@extends('layouts.site')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="h3 mb-2 text-gray-800">Accordion Details</h4>
            <div class="card-header-action">
                <a href="{{ route('accordions.index') }}" class="btn btn-primary">Back to Accordion</a>
            </div>
        </div>

        <div class="card-body">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Accordion Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td><strong>Title:</strong></td>
                                        <td>{{ $accordion->title }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Number:</strong></td>
                                        <td>{{ $accordion->number }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>${{ $accordion->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Location:</strong></td>
                                        <td>{{ $accordion->location }}</td>
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
