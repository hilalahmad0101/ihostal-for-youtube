@extends('layouts.app')
@section('title')
    Notice Update
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Notice Update</h3>
                    <a href="{{ route('admin.notice.list') }}" class="btn purchase-button">Go Back</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Notice Form</h4>
                        <form method="POST" action="{{ route('admin.notice.update',['id'=>$notice->id]) }}" enctype="multipart/form-data"
                            class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="exampleInputUsertitle2"
                                        placeholder="Enter Title" value="{{ $notice->title }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" name="date" class="form-control" id="exampleInputUserdate2"
                                        placeholder="Enter Date" value="{{ $notice->date }}">
                                    @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Notice</label>
                                <div class="col-sm-9">
                                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $notice->content }}</textarea>
                                    @error('content')
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
