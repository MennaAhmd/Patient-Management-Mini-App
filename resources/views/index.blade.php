@extends('layout')

@section('title', 'All Patients')

@section('content')
<h2>All Patients</h2>

<!-- Search Form -->
<form method="GET" action="{{ route('index') }}" class="mb-3 d-flex">
    <input type="text" name="search" value="{{ $search }}" class="form-control me-2" placeholder="Search by name or email">
    <button type="submit" class="btn btn-primary">Search</button>
</form>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('create') }}" class="btn btn-success mb-3">Add New Patient</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Gender</th><th>Blood Type</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->phone }}</td>
                <td>{{ ucfirst($patient->gender) }}</td>
                <td>{{ $patient->blood_type }}</td>
                <td><a href="{{ route('show', $patient->id) }}" class="btn btn-info btn-sm">View</a></td>
            </tr>
        @empty
            <tr><td colspan="7" class="text-center">No patients found</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
