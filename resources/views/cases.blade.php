﻿@extends('layout')
@section('content')
    </head>

    <body>
        <x-media-card/>

        <x-nav-card />

        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h1 class="mb-3 bread">Case Study</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Case Study <i
                                    class="fa fa-chevron-right"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Our Strategic <span>Work</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Development</span>
                                <h3><a href="project.html">Best Solution for Information Technology</a></h3>
                            </div>
                            <a href="images/work-1.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Application</span>
                                <h3><a href="project.html">Creative Idea Build Up</a></h3>
                            </div>
                            <a href="images/work-2.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('images/work-3.jpg') }}" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Development</span>
                                <h3><a href="project.html">Web Design Concept &amp; Web Analysis</a></h3>
                            </div>
                            <a href="images/work-3.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>UI/UX Strategy</span>
                                <h3><a href="project.html">Strategy for Enduring Customer Relationships</a></h3>
                            </div>
                            <a href="images/work-4.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Development</span>
                                <h3><a href="project.html">Best Solution for Information Technology</a></h3>
                            </div>
                            <a href="images/work-5.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Application</span>
                                <h3><a href="project.html">Creative Idea Build Up</a></h3>
                            </div>
                            <a href="images/work-6.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Development</span>
                                <h3><a href="project.html">Web Design Concept &amp; Web Analysis</a></h3>
                            </div>
                            <a href="images/work-7.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>UI/UX Strategy</span>
                                <h3><a href="project.html">Strategy for Enduring Customer Relationships</a></h3>
                            </div>
                            <a href="images/work-8.jpg"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <x-footer-card/>
@endsection
