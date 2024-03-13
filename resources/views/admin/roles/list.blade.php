@extends('layouts.app')
@section('title')
    Role List
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Role</h3>
                    <a href="{{ route('admin.role.create') }}" class="btn purchase-button">Add New</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Role List</h4>
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
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        @if ($role->status == 1)
                                            <td><label class="badge badge-success">Active</label></td>
                                        @else
                                            <td><label class="badge badge-danger">Inactive</label></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('admin.role.edit', ['id' => $role->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.role.delete', ['id' => $role->id]) }}"
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
