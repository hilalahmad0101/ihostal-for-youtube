@extends('layouts.app')
@section('title')
    Branch  Update
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Branch  Update</h3>
                    <a href="{{ route('admin.branch.list') }}" class="btn purchase-button">Go Back</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Branch  Form</h4>
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('admin.branch.update', ['id' => $branch->id]) }}"
                            class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="branch_name" class="form-control"
                                        id="exampleInputUserbranch_name2" placeholder="Enter Name"
                                        value="{{ $branch->branch_name }}">
                                    @error('branch_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Branch </label>
                                <div class="col-sm-9">
                                    <select name="branch_category_id" id="" class="form-control">
                                        <option value="">Select the category</option>
                                        @foreach ($branch_category as $category)
                                            <option @selected($category->id == $branch->branch_category_id) value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('branch_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alias</label>
                                <div class="col-sm-9">
                                    <input type="text" name="branch_alias" class="form-control"
                                        id="exampleInputUserbranch_alias2" placeholder="Enter Name"
                                        value="{{ $branch->branch_alias }}">
                                    @error('branch_alias')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" class="form-control" id="exampleInputUseremail2"
                                        placeholder="Enter Name" value="{{ $branch->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" id="exampleInputUserphone2"
                                        placeholder="Enter Name" value="{{ $branch->phone }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Capacity</label>
                                <div class="col-sm-9">
                                    <input type="text" name="capacity" class="form-control"
                                        id="exampleInputUsercapacity2" placeholder="Enter Name"
                                        value="{{ $branch->capacity }}">
                                    @error('capacity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Footer</label>
                                <div class="col-sm-9">
                                    <input type="text" name="footer" class="form-control" id="exampleInputUserfooter2"
                                        placeholder="Enter Name" value="{{ $branch->footer }}">
                                    @error('footer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Logo</label>
                                <div class="col-sm-9">
                                    <input type="file" name="logo" class="form-control" id="exampleInputUserlogo2"
                                        placeholder="Enter Name" value="{{ $branch->logo }}">
                                    <img src="{{ asset('storage/' . $branch->logo) }}"  width="100" alt="">
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control"
                                        id="exampleInputUseraddress2" placeholder="Enter Name"
                                        value="{{ $branch->address }}">
                                    @error('address')
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
