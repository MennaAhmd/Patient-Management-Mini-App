@extends('layout')

@section('title', 'Patient Details')

@section('content')
<h2>Patient Details</h2>

<div class="card p-4">
    <p><strong>First Name:</strong> {{ $patient->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $patient->last_name }}</p>
    <p><strong>Gender:</strong> {{ ucfirst($patient->gender) }}</p>
    <p><strong>Birth Date:</strong> {{ $patient->birth_date }}</p>
    <p><strong>Email:</strong> {{ $patient->email }}</p>
    <p><strong>Phone:</strong> {{ $patient->phone }}</p>
    <p><strong>Address:</strong> {{ $patient->address }}</p>
    <p><strong>Blood Type:</strong> {{ $patient->blood_type }}</p>
</div>

<a href="{{ route('index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
