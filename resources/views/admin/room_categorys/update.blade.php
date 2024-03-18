@extends('layouts.app')
@section('title')
    Room Category Update
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Room Category Update</h3>
                    <a href="{{ route('admin.room_categorys.list') }}" class="btn purchase-button">Go Back</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Room Category Form</h4>
                        <form method="POST" action="{{ route('admin.room_categorys.update',['id'=>$room_category->id]) }}" class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="exampleInputUsername2"
                                        placeholder="Enter Name" value="{{ $room_category->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
