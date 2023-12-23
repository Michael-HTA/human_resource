@extends('layouts.app')
@section('content')
<div class="container">
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
        </div>
        <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $employee->address }}">
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $employee->email }}">
        </div>
        <div class="mb-3">

            <label for="casual_leave">Casual Leave</label>
            <input type="number" placeholder="Casual Leave" name="casual_leave" class="form-control" value="{{ $employee->casual_leave }}">

            <label for="annual_leave">Annual Leave</label>
            <input type="number" placeholder="Annual Leave" name="annual_leave" class="form-control" value="{{ $employee->annual_leave }}">

            <label for="medical_leave">Medical Leave</label>
            <input type="number" placeholder="Medical Leave" name="medical_leave" class="form-control" value="{{ $employee->medical_leave }}">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select class="form-select" name="role_id">
                @foreach ($roles as $role)
                    @if ($role->id === $employee->role_id)
                        <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                    @else
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <input type="submit" value="Update Employee" class="btn btn-primary">
    </form>
</div>
@endsection
