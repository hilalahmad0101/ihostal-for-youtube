@extends('layouts.app')
@section('title')
    Bed Create
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Bed Create</h3>
                    <a href="{{ route('admin.bed.list') }}" class="btn purchase-button">Go Back</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Bed Form</h4>
                        <form method="POST" action="{{ route('admin.bed.store') }}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bed Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="bed_no" class="form-control"
                                        id="exampleInputUserbed_no2" placeholder="Enter Bed Number"
                                        value="{{ old('bed_no') }}">
                                    @error('bed_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Room</label>
                                <div class="col-sm-9">
                                    <select name="room_id" id="" class="form-control">
                                        <option value="">Select the Ropm</option>
                                        @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}">{{ $room->room_no }}</option>
                                        @endforeach
                                    </select>
                                    @error('room_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" name="description" class="form-control"
                                        id="exampleInputUserdescription2" placeholder="Enter description"
                                        value="{{ old('description') }}">
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
