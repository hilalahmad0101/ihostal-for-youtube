@extends('layouts.app')
@section('title')
    Room Create
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Room Create</h3>
                    <a href="{{ route('admin.room.list') }}" class="btn purchase-button">Go Back</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Room Form</h4>
                        <form method="POST" action="{{ route('admin.room.store') }}" enctype="multipart/form-data"
                            class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Room No</label>
                                <div class="col-sm-9">
                                    <input type="text" name="room_no" class="form-control" id="exampleInputUserroom_no2"
                                        placeholder="Enter Room No" value="{{ old('room_no') }}">
                                    @error('room_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Room Category</label>
                                <div class="col-sm-9">
                                    <select name="room_category_id" id="" class="form-control">
                                        <option value="">Select the category</option>
                                        @foreach ($room_categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('room_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Room Charge</label>
                                <div class="col-sm-9">
                                    <input type="number" name="room_charge" class="form-control"
                                        id="exampleInputUserroom_charge2" placeholder="Enter Room Charge"
                                        value="{{ old('room_charge') }}">
                                    @error('room_charge')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                                    @error('description')
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
