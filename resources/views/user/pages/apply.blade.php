@extends('layouts.main_layout')

@section('title', 'Admission Form')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="col-lg-10 mx-auto bg-white p-5 rounded shadow-lg">
            <h2 class="mb-4 text-center text-primary">Student Admission Form</h2>

            <form method="POST" action="{{ route('apply') }}">
                @csrf

                {{-- PERSONAL DETAILS --}}
                <h5 class="text-secondary mb-3">🧍 Personal Details</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Full Name" required>
                            <label for="student_name">Student's Full Name</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" name="dob" class="form-control" id="dob" required>
                            <label for="dob">Date of Birth</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select name="gender" class="form-select" id="gender" required>
                                <option selected disabled value="">Select</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                            <label for="gender">Gender</label>
                        </div>
                    </div>
                </div>

                {{-- PARENT/GUARDIAN DETAILS --}}
                <h5 class="text-secondary mt-5 mb-3">👨‍👩‍👧 Parent/Guardian Details</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Father's Name" required>
                            <label for="father_name">Father's Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Mother's Name" required>
                            <label for="mother_name">Mother's Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="parent_occupation" class="form-control" id="parent_occupation" placeholder="Occupation">
                            <label for="parent_occupation">Parent's Occupation</label>
                        </div>
                    </div>
                </div>

                {{-- CONTACT DETAILS --}}
                <h5 class="text-secondary mt-5 mb-3">📞 Contact Details</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                            <label for="phone">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                            <label for="email">Email Address</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea name="address" class="form-control" placeholder="Address" id="address" style="height: 100px" required></textarea>
                            <label for="address">Residential Address</label>
                        </div>
                    </div>
                </div>

                {{-- ACADEMIC DETAILS --}}
                <h5 class="text-secondary mt-5 mb-3">🏫 Academic Details</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select name="class" class="form-select" id="class" required>
                                <option selected disabled value="">Class</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option>{{ $i }}</option>
                                @endfor
                            </select>
                            <label for="class">Class to Join</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="section" class="form-control" id="section" placeholder="Section">
                            <label for="section">Preferred Section</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="previous_school" class="form-control" id="previous_school" placeholder="Previous School">
                            <label for="previous_school">Previous School</label>
                        </div>
                    </div>
                </div>

                {{-- DOCUMENT INFO --}}
                <h5 class="text-secondary mt-5 mb-3">📄 Optional & Document Info</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="aadhar" class="form-control" id="aadhar" placeholder="Aadhar No">
                            <label for="aadhar">Aadhar Number</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality">
                            <label for="nationality">Nationality</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="blood_group" class="form-control" id="blood_group" placeholder="Blood Group">
                            <label for="blood_group">Blood Group</label>
                        </div>
                    </div>
                </div>

                {{-- EMERGENCY DETAILS --}}
                <h5 class="text-secondary mt-5 mb-3">🚨 Emergency Contact</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="emergency_contact_name" class="form-control" id="emergency_contact_name" placeholder="Contact Person">
                            <label for="emergency_contact_name">Contact Person</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="tel" name="emergency_contact_phone" class="form-control" id="emergency_contact_phone" placeholder="Phone Number">
                            <label for="emergency_contact_phone">Phone Number</label>
                        </div>
                    </div>
                </div>

                {{-- SUBMIT --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill">Submit Admission Form</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
