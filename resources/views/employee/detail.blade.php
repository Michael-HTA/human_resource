@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="border border-2 rounded-pill btn btn-primary" href="{{url('/employee/list')}}">Home</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-2 text-center mb-2">
                    <div>Name: {{ $employee->name }}</div>
                    <div>Address: {{ $employee->address }}</div>
                    <div>Phone: {{ $employee->phone }}</div>
                    <div>Position: {{ $employee->role->name }}</div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="{{asset('storage/'. $employee->image)}}" alt="Profile">
                    <div class="card-title">Profile</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="ms-2 float-end btn btn-primary" href='{{url("employee/update/$employee->id")}}'>Update</a>
                <a href='{{url("employee/delete/$employee->id")}}' class="float-end btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endsection
