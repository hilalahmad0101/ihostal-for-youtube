@extends('layouts.app')
@section('title')
    Notice List
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row " id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h3>Notice</h3>
                    <a href="{{ route('admin.notice.create') }}" class="btn purchase-button">Add New</a>
                </span>
            </div>
        </div>
        <div class="row d-flex aling-items-center justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Notice List</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>date</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notices as $notice)
                                    <tr>
                                        <td>{{ $notice->id }}</td>
                                        <td>{{ $notice->title }}</td>
                                        <td>{{ $notice->date }}</td>
                                        <td>{{ $notice->content }}</td>
                                        <td>
                                            <a href="{{ route('admin.notice.edit', ['id' => $notice->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.notice.delete', ['id' => $notice->id]) }}"
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
