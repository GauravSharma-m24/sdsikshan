@extends('layouts.main_layout')

@section('title', 'Admission Details')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="bg-white p-4 rounded shadow-lg" id="admission-details">
            <!-- School Header -->
            <div class="text-center mb-4">
                <img src="{{ asset('img/logo.png') }}" alt="School Logo" width="80">
                <h3 class="mt-3 mb-0">SDS Sikshan School</h3>
                <p class="text-muted">Excellence in Education Since 2005</p>
                <hr>
            </div>

            <!-- Student Details -->
            <h4 class="text-primary mb-3">Admission Form Details</h4>
            <table class="table table-bordered">
                <tbody>
                    <tr><th width="30%">Student Name</th><td>{{ $student->student_name }}</td></tr>
                    <tr><th>Date of Birth</th><td>{{ $student->dob }}</td></tr>
                    <tr><th>Gender</th><td>{{ $student->gender }}</td></tr>
                    <tr><th>Father's Name</th><td>{{ $student->father_name }}</td></tr>
                    <tr><th>Mother's Name</th><td>{{ $student->mother_name }}</td></tr>
                    <tr><th>Phone</th><td>{{ $student->phone }}</td></tr>
                    <tr><th>Email</th><td>{{ $student->email }}</td></tr>
                    <tr><th>Address</th><td>{{ $student->address }}</td></tr>
                    <tr><th>Class</th><td>{{ $student->class }}</td></tr>
                    <tr><th>Section</th><td>{{ $student->section }}</td></tr>
                    <tr><th>Previous School</th><td>{{ $student->previous_school }}</td></tr>
                    <tr><th>Aadhar Number</th><td>{{ $student->aadhar }}</td></tr>
                    <tr><th>Nationality</th><td>{{ $student->nationality }}</td></tr>
                    <tr><th>Blood Group</th><td>{{ $student->blood_group }}</td></tr>
                    <tr><th>Emergency Contact Name</th><td>{{ $student->emergency_contact_name }}</td></tr>
                    <tr><th>Emergency Contact Phone</th><td>{{ $student->emergency_contact_phone }}</td></tr>
                </tbody>
            </table>

            <!-- Important Notes Section -->
            <hr class="my-4">
            <div class="mt-4" style="font-style: italic; color: #555;">
                <h5 class="text-decoration-underline">Important Notes:</h5>
                <ul style="list-style: disc; margin-left: 1.5rem;">
                    <li>Please visit the school administration office within <strong>7 working days</strong> with original documents for verification.</li>
                    <li>Bring the following documents: Aadhar card, previous school transfer certificate, birth certificate, and 2 passport-sized photographs.</li>
                    <li>Submission of this form does not confirm admission until documents are verified and applicable fees are paid.</li>
                    <li>Hostel and transport arrangements are to be applied for separately at the admin desk.</li>
                    <li>For any queries, contact us at <strong>+91-XXXX-XXXXXX</strong> or email <strong>admissions@sdsikshan.com</strong></li>
                </ul>
                <p class="mt-3">We look forward to welcoming you to our school community. ✨</p>
            </div>

            <!-- Download Button -->
            <div class="text-center mt-4">
                <button onclick="printPage()" class="btn btn-outline-primary">Download as PDF</button>
            </div>
            <br>
            <div>
                 Printed on: {{ now()->format('d M Y') }}
            </div>
        </div>
        
    </div>
</section>

<script>
    function printPage() {
        var originalContent = document.body.innerHTML;
        var printContent = document.getElementById('admission-details').innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
        location.reload();
    }
</script>
@endsection
