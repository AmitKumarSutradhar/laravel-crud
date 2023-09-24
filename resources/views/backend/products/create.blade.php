@extends('backend.master')

@section('title')
    Create Product
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Product</h3>
                    </div>
                    <div class="card-body">
                        <span class="text-success">{{ session('success') }}</span>
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Cat. name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control-lg">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" >Published</label>
                                    <label for=""><input type="radio" name="status" value="1" >Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Create Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
