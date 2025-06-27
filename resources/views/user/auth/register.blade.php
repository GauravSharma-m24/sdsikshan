@extends('layouts.main_layout')

@section('title', 'Register')

@section('content')
<!-- Registration Section Start -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-5">
            <!-- Image / Illustration -->
            <div class="col-lg-6 text-center wow fadeInLeft" data-wow-delay="0.3s">
                <img src="{{ asset('img/register-img.png') }}" class="img-fluid rounded shadow-lg" alt="Registration Image">
            </div>

            <!-- Registration Form -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="bg-white p-5 rounded shadow-lg">
                    <h2 class="mb-4 text-center text-primary">Student Registration</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                            <label for="name">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="fatherName" placeholder="Father Name" required>
                            <label for="name">Father's Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Create Password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required>
                            <label for="dob">Date of Birth</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                            <label for="phone">Phone Number</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="class" name="class" placeholder="Class" required>
                            <label for="class">Class</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="section" name="section" placeholder="Section" required>
                            <label for="section">Section</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill">Register Now</button>
                        </div>
                    </form>

                    <p class="mt-4 text-center">Already have an account? 
                        <a href="{{ route('loginForm') }}" class="text-decoration-none text-primary">Login here</a>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Registration Section End -->


@endsection
