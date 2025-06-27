@extends('layouts.main_layout')

@section('title', 'About Us')

@section('content')

        <!-- Header Start -->
                <div class="container-fluid bg-breadcrumb">
                    <div class="container text-center py-5" style="max-width: 900px;">
                        <h3 class="text-primary display-3 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                        <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                            <li class="breadcrumb-item"><a href="index.html" class="text-dark">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                            <li class="breadcrumb-item active text-primary">About</li>
                        </ol>    
                    </div>
                </div>
        <!-- Header End -->    

        <!-- Banner Start -->
                <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                            <h1 class="me-4"><span class="fw-normal">Join us today for </span><span> your first dance</span></h1>
                            <a href="#" class="text-white fw-bold fs-2"> <i class="fa fa-phone me-1"></i> 714-783-2205</a>
                        </div>
                    </div>
                </div>
        <!-- Banner End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="border bg-secondary rounded">
                            <img src="img/about-2.png" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-secondary sub-title fw-bold">about The Dance School</h4>
                        <h1 class="display-3 mb-4"><strong class="text-primary">JustDance</strong>, We have been teaching dance since 2001</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint commodi alias, eius incidunt similique exercitationem magni quod recusandae maiores ducimus non porro neque odio explicabo, doloribus deleniti rem sequi adipisci sed ab qui dolorem. Optio sint eius illum consequuntur. Odit.
                        </p>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.
                        </p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        @include('user.sections.teachers')

        @include('user.sections.counter')

@endsection