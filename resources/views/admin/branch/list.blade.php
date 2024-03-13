@extends('layouts.app')
@section('title')
    Branch List
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Branch</h3>
                    <a href="{{ route('admin.branch.create') }}" class="btn purchase-button">Add New</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Branch List</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($branches as $branch)
                                    <tr>
                                        <td>{{ $branch->id }}</td>
                                        <td>{{ $branch->branch_name }}</td>
                                        <td><img src="{{ asset('storage/' . $branch->logo) }}" width="100"
                                                alt=""></td>
                                        <td>
                                            <a href="{{ route('admin.branch.edit', ['id' => $branch->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.branch.delete', ['id' => $branch->id]) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
