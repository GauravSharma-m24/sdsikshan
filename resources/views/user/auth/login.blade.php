@extends('layouts.main_layout')

@section('title', 'Login')

@section('content')
<!-- Login Section Start -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-5">
            
            <!-- Image / Illustration -->
            <div class="col-lg-6 text-center wow fadeInLeft" data-wow-delay="0.3s">
                <img src="{{ asset('img/login-img.png') }}" class="img-fluid rounded shadow-lg" alt="Login Image">
            </div>

            <!-- Login Form -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="bg-white p-5 rounded shadow-lg">
                    <h2 class="mb-4 text-center text-primary">Student Login</h2>

                    <!-- SweetAlert Success -->
                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Welcome!',
                                    text: '{{ session('success') }}',
                                    confirmButtonColor: '#3085d6',
                                });
                            });
                        </script>
                    @endif

                    <!-- SweetAlert Error -->
                    @if (session('error'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: '{{ session('error') }}',
                                    confirmButtonColor: '#d33',
                                });
                            });
                        </script>
                    @endif

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill">Login</button>
                        </div>
                    </form>

                    <p class="mt-4 text-center">Don't have an account? 
                        <a href="{{ route('registerForm') }}" class="text-decoration-none text-primary">Register here</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Login Section End -->


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