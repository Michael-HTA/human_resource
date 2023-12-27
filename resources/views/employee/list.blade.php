@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row g-3 mb-1">
                <form action="{{url('employee/list')}}" class="col d-flex justify-content-evenly">
                    <div class="col">
                        <input type="search" name="search" class="form-control" >
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary form-control" type="submit">Search</button>
                    </div>
                </form>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <span class="list-group-item d-none disabled d-lg-inline">
                        <strong>Employee</strong>
                    </span>
                    <div class="list-group-item float-start">Role</div>
                    <div class="list-group-item float-start">Salary</div>
                    <div class="list-group-item float-start">Leave</div>
                    <a href="{{ url('employee/add') }}" class="list-group-item float-start">Register Employee</a>
                </div>
            </div>
            <div class="col-10">
                <div class="container">
                    <div class="row d-flex">
                        @foreach ($employees as $employee)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div>Name: {{ $employee->name }}</div>
                                        <div>Address: {{ $employee->address }}</div>
                                        <div>Phone: {{ $employee->phone }}</div>
                                        <div>Position: {{ $employee->role->name }}</div>
                                        <a href="{{ url("employee/detail/$employee->id") }}">Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
