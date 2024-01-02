@extends('layouts.app')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar">
                    <div>
                        <a href='{{url("/employee/list")}}' class="btn btn-primary rounded-5">Home</a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger rounded-5" data-bs-toggle="modal"
                            data-bs-target="#delete">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p>Are you sure to delete this?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                            <a href='{{url("employee/delete/$employee->id")}}' class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href='{{route("employee.edit", ["id" => $employee->id])}}' class="btn btn-success rounded-5">Update</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mt-2">
            <div class="border rounded-3 justify-content-between d-flex">
                <div class="col-10">
                    <h1 class="border-bottom border-2 border-dark">{{$employee->name}}</h1>
                    <p>{{ $employee->role->name }}</p>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <img src="{{asset('storage/'.$employee->image)}}" class="image-fluid" alt="Profile"
                        style="height: 150px; width: 180px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 d-flex">
                <div class="col-3">
                    <div>Phone</div>
                    <div>Email</div>
                    <div>Address</div>
                    <div>Company</div>
                </div>
                <div class="col">
                    <div>{{$employee->phone}}</div>
                    <div>{{$employee->email}}</div>
                    <div>{{$employee->address}}</div>
                    <div>DDI</div>
                </div>
            </div>
            <div class="col-6 d-flex">
                <div class="col-3">
                    <div>Department</div>
                    <div>Casual leave</div>
                    <div>Annual leave</div>
                    <div>Medical leave</div>
                </div>
                <div class="col-auto">
                    <div>{{$employee->role->department}}</div>
                    <div>{{$employee->casual_leave}}</div>
                    <div>{{$employee->annual_leave}}</div>
                    <div>{{$employee->medical_leave}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
