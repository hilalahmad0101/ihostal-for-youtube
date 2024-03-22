@extends('layouts.app')
@section('title')
    Bed List
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Bed</h3>
                    <a href="{{ route('admin.bed.create') }}" class="btn purchase-button">Add New</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bed List</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Bed No</th>
                                    <th>Room ID</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beds as $bed)
                                    <tr>
                                        <td>{{ $bed->id }}</td>
                                        <td>{{ $bed->bed_no }}</td>
                                        <td>{{ $bed->room->room_no }}</td>
                                        <td>{{ $bed->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.bed.edit', ['id' => $bed->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.bed.delete', ['id' => $bed->id]) }}"
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
