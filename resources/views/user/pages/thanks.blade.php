@extends('layouts.main_layout')

@section('title', 'Thank You')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="col-lg-8 mx-auto bg-white p-5 rounded shadow text-center">
            <img src="{{ asset('img/thanks-img.png') }}" alt="Thank You" class="mb-4" style="max-width: 120px;">
            
            <h2 class="text-success mb-3">Thank You, {{ session('student_name') }}!</h2>
            <p class="lead mb-4">
                Your admission form has been successfully submitted. We appreciate your interest in joining our school.
            </p>

            <p class="mb-4 text-muted">
                Our admission team will review your application and get back to you shortly.
                Please make sure to visit the school campus with your original documents and 
                passport-size photographs to complete the admission formalities.
            </p>
            <div class="text-center mt-5">
                <p class="mb-3 fs-5 text-secondary">
                    You can download or view your admission form below.
                </p>
                <a href="{{ route('admission_details') }}" target="_blank" class="btn btn-outline-primary btn-lg rounded-pill shadow">
                    📄 Download Admission Form (PDF)
                </a>
            </div>
            <br>
            <div class="alert alert-info mb-4">
                <strong>Note:</strong> Admission is confirmed only after document verification and fee payment.
            </div>

            <a href="{{ route('homepage') }}" class="btn btn-primary rounded-pill px-4 py-2">Back to Home</a>
        </div>
    </div>
</section>

@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
@endsection