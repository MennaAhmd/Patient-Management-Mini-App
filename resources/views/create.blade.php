@extends('layout')

@section('title', 'Add Patient')

@section('content')
<h2>Add New Patient</h2>

<form method="POST" action="{{ route('store') }}">
    @csrf
    <div class="mb-3"><label>First Name</label><input type="text" name="first_name" class="form-control" required></div>
    <div class="mb-3"><label>Last Name</label><input type="text" name="last_name" class="form-control" required></div>
    <div class="mb-3"><label>Gender</label>
        <select name="gender" class="form-control" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="mb-3"><label>Birth Date</label><input type="date" name="birth_date" class="form-control"></div>
    <div class="mb-3"><label>Phone</label><input type="text" name="phone" class="form-control"></div>
    <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control"></div>
    <div class="mb-3"><label>Address</label><input type="text" name="address" class="form-control"></div>
    <div class="mb-3"><label>Blood Type</label><input type="text" name="blood_type" class="form-control"></div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
