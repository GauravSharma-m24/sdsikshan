@extends('layouts.main_layout')

@section('title', 'Home')

@section('content')
<!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                {{-- <div class="carousel-caption">
                    <div class="carousel-caption-content p-3" style="max-width: 900px;">
                        <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Let's Dance</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Once A Dancer, Is Always A Dance</h1>
                        <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="pt-2">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>
                            <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="header-carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                {{-- <div class="carousel-caption">
                    <div class="carousel-caption-content p-3" style="max-width: 900px;">
                        <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px;">Let's Dance</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Once A Dancer, Is Always A Dance</h1>
                        <p class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="pt-2">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>
                            <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="header-carousel-item">
                <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Image">
                {{-- <div class="carousel-caption">
                    <div class="carousel-caption-content p-3" style="max-width: 900px;">
                        <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px;">Let's Dance</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Once A Dancer, Is Always A Dance</h1>
                        <p class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="pt-2">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>
                            <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="header-carousel-item">
                <img src="img/carousel-4.jpg" class="img-fluid w-100" alt="Image">
                {{-- <div class="carousel-caption">
                    <div class="carousel-caption-content p-3" style="max-width: 900px;">
                        <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px;">Let's Dance</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Once A Dancer, Is Always A Dance</h1>
                        <p class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="pt-2">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>
                            <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        </div>
            
        <!-- Carousel End -->

       <!-- About Start -->
        <div class="container-fluid py-5 bg-light">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- School Image -->
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="border bg-white rounded shadow-sm">
                            <img src="{{ asset('img/about-school.jpg') }}" class="img-fluid w-100 rounded" alt="About Our School">
                        </div>
                    </div>

                    <!-- School Description -->
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                        <p class="text-uppercase text-muted mb-2 fw-semibold">About Our School</p>
                        <h2 class="display-5 fw-bold mb-3">
                            <span class="text-primary">SDS Shikshan</span> — Building Bright Futures Since 2001
                        </h2>
                        <p class="text-dark fs-6 mb-3">
                            At SDS Shikshan, we believe that education is the foundation for success. Since our establishment in 2001, we have been committed to providing holistic education that nurtures young minds, inspires creativity, and shapes responsible citizens.
                        </p>
                        <p class="text-muted fs-6 mb-4">
                            Our well-qualified faculty, modern infrastructure, and student-centered learning environment help students excel academically and grow socially and emotionally. We empower students with knowledge, discipline, and confidence to lead in every field of life.
                        </p>
                        <a href="{{ route('aboutpage') }}" class="btn btn-primary rounded-pill px-4 py-2">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        @include('user.sections.counter')

        @include('user.sections.facility')

        @include('user.sections.notice')

        @include('user.sections.blogs')

        @include('user.sections.event-section')

        @include('user.sections.testimonials')

@endsection

