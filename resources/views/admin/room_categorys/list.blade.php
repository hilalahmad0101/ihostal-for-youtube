@extends('layouts.app')
@section('title')
    Room Category List
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Room Category</h3>
                    <a href="{{ route('admin.room_categorys.create') }}" class="btn purchase-button">Add New</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Room Category List</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($room_categorys as $room_category)
                                    <tr>
                                        <td>{{ $room_category->id }}</td>
                                        <td>{{ $room_category->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.room_categorys.edit', ['id' => $room_category->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.room_categorys.delete', ['id' => $room_category->id]) }}"
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
