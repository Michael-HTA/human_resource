{{-- @extends('layouts.app');
@section('content')
    @foreach ($employees as $employee)
        <div>{{ $employee->name }}</div>
        <div>{{ $employee->address }}</div>
        <div>{{ $employee->phone }}</div>
        <div>{{ $employee->email }}</div>
        <div>{{ $employee->role->name }}</div>
        <div>{{ $employee->role->salary }}</div>
        <br>
    @endforeach
    <form action="{{ url('employee/create') }}" method="POST">
        @csrf
        <input type="text" class="form-control mb-2" name="name" placeholder="Name" required>
        <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
        <input type="text" class="form-control mb-2" name="address" placeholder="Address" required>
        <input type="text" class="form-control mb-2" name="phone" placeholder="Phone" required>
        <input type="text" class="form-control mb-2" name="role_id" placeholder="Role" required>
        <button class="btn btn-primary w-100 mb-2">Create</button>
    </form>
@endsection --}}
