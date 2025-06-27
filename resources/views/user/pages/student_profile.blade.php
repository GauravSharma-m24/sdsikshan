@extends('layouts.main_layout')

@section('title', 'Student Profile')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 bg-white p-5 rounded shadow">

                <!-- Profile Header -->
                <div class="text-center mb-5">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('storage/uploads/'.$student->photo) }}" alt="Profile Photo"
                             class="rounded-circle border border-3 shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        <form method="POST" action="{{ route('student.upload.photo') }}" enctype="multipart/form-data" class="mt-2">
                            @csrf
                            <input type="file" name="photo" class="form-control form-control-sm" onchange="this.form.submit()">
                        </form>
                    </div>
                    <h3 class="mt-3 text-primary">{{ $student->student_name }}</h3>
                    <p class="text-muted">Class {{ $student->class }} - Section {{ $student->section }}</p>
                </div>

                <!-- Profile Details -->
                <div class="row g-4">
                    <!-- Personal Info -->
                    <div class="col-md-6">
                        <h5 class="text-secondary">👤 Personal Information</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Father's Name:</strong> {{ $student->father_name }}</li>
                            <li class="list-group-item"><strong>Mother's Name:</strong> {{ $student->mother_name }}</li>
                            <li class="list-group-item"><strong>Date of Birth:</strong> {{ $student->dob }}</li>
                            <li class="list-group-item"><strong>Gender:</strong> {{ $student->gender }}</li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-md-6">
                        <h5 class="text-secondary">📞 Contact Details</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Phone:</strong> {{ $student->phone }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>
                            <li class="list-group-item"><strong>Address:</strong> {{ $student->address }}</li>
                        </ul>
                    </div>

                    <!-- Academic Info -->
                    <div class="col-md-6">
                        <h5 class="text-secondary">🏫 Academic Details</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Class:</strong> {{ $student->class }}</li>
                            <li class="list-group-item"><strong>Section:</strong> {{ $student->section }}</li>
                            <li class="list-group-item"><strong>Previous School:</strong> {{ $student->previous_school }}</li>
                        </ul>
                    </div>

                    <!-- Other Info -->
                    <div class="col-md-6">
                        <h5 class="text-secondary">📝 Documents & Others</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Aadhar Number:</strong> {{ $student->aadhar }}</li>
                            <li class="list-group-item"><strong>Nationality:</strong> {{ $student->nationality }}</li>
                            <li class="list-group-item"><strong>Blood Group:</strong> {{ $student->blood_group }}</li>
                            <li class="list-group-item"><strong>Emergency Contact:</strong> {{ $student->emergency_contact_name }} ({{ $student->emergency_contact_phone }})</li>
                        </ul>
                    </div>
                </div>

                <!-- Edit Button -->
                <div class="text-end mt-4">
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-outline-primary">
                        <i class="bi bi-pencil"></i> Edit Profile
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
