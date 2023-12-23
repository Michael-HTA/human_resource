@extends('layouts.app')
@section('content')
<div class="container">
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select class="form-select" name="role_id">
                @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Register Employee" class="btn btn-primary">
    </form>
</div>
@endsection
