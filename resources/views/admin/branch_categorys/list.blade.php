@extends('layouts.app')
@section('title')
    Branch Category List
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Branch Category</h3>
                    <a href="{{ route('admin.branch_categorys.create') }}" class="btn purchase-button">Add New</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Branch Category List</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($branch_categorys as $branch_category)
                                    <tr>
                                        <td>{{ $branch_category->id }}</td>
                                        <td>{{ $branch_category->name }}</td>
                                        @if ($branch_category->status == 1)
                                            <td><label class="badge badge-success">Active</label></td>
                                        @else
                                            <td><label class="badge badge-danger">Inactive</label></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('admin.branch_categorys.edit', ['id' => $branch_category->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.branch_categorys.delete', ['id' => $branch_category->id]) }}"
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
