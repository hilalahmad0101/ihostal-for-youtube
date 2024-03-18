@extends('layouts.app')
@section('title')
    Room List
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Room</h3>
                    <a href="{{ route('admin.room.create') }}" class="btn purchase-button">Add New</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Room List</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Room No</th>
                                    <th>Room Category</th>
                                    <th>Room Charge</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->room_no }}</td>
                                        <td>{{ $room->category->name }}</td>
                                        <td>{{ $room->room_charge }}</td>
                                        <td>
                                            <a href="{{ route('admin.room.edit', ['id' => $room->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.room.delete', ['id' => $room->id]) }}"
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
