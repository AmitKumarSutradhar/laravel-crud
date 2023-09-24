@extends('backend.master')

@section('title')
    Full Name
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Full Name</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('get-full-name') }}" method="post">
                            @csrf
                            <div class="row">
                                <label for="" class="col-md-4">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control" value="{{ session('first_name') }}" placeholder="First Name">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control" value="{{ session('last_name') }}" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control" value="{{ session('result') }}" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="" class="btn btn-success" value="Get Full Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
