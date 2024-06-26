﻿@extends('layout')

@section('content')
    </head>

    <body>
        <x-media-card/>

        <x-nav-card />

        <section class="hero-wrap hero-wrap-2" style="background-image: url({{('images/bg_3.jpg')}});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h1 class="mb-3 bread">Services</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Services <i
                                    class="fa fa-chevron-right"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section services-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-6 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Our Exclusive <span>IT Solution</span> Services</h2>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon"><span class="flaticon-web-programming"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Web Development</h3>
                                <p> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon"><span class="flaticon-stats"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Database Analysis</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon"><span class="flaticon-secure"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Server Security</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon"><span class="flaticon-presentation"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">UX/UI Strategy</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section ftco-no-pt">
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
                                <img src="{{asset('images/work-1.jpg')}}" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Development</span>
                                <h3><a href="project.html">Best Solution for Information Technology</a></h3>
                            </div>
                            <a href="{{asset('images/work-1.jpg')}}"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/work-2.jpg')}}" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Application</span>
                                <h3><a href="project.html">Creative Idea Build Up</a></h3>
                            </div>
                            <a href="{{asset('images/work-2.jpg')}}"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/work-3.jpg')}}" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>Web Development</span>
                                <h3><a href="project.html">Web Design Concept &amp; Web Analysis</a></h3>
                            </div>
                            <a href="{{asset('images/work-3.jpg')}}"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/work-4.jpg')}}" class="img-fluid" alt="Colorlib Template">
                            </div>
                            <div class="text text-center">
                                <span>UI/UX Strategy</span>
                                <h3><a href="project.html">Strategy for Enduring Customer Relationships</a></h3>
                            </div>
                            <a href="{{asset('images/work-4.jpg')}}"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section bg-light ftco-faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-md-last">
                        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                            style="background-image:url({{('images/about.jpg')}});">
                        </div>
                        <div class="d-flex mt-3">
                            <div class="img img-2 mr-md-2 w-100" style="background-image:url({{('images/about-1.jpg')}});"></div>
                            <div class="img img-2 ml-md-2 w-100" style="background-image:url({{('images/about-2.jpg')}});"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-section mb-5 mt-5 mt-lg-0">
                            <h2 class="mb-3">Frequently Asks Questions</h2>
                        </div>
                        <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header p-0" id="headingOne">
                                    <h2 class="mb-0">
                                        <button href="#collapseOne"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <p class="mb-0">How can we help your business?</p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse show" id="collapseOne" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="card-body py-3 px-0">
                                        <ol>
                                            <li>Far far away, behind the word mountains</li>
                                            <li>Consonantia, there live the blind texts</li>
                                            <li>When she reached the first hills of the Italic Mountains</li>
                                            <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingTwo" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapseTwo"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <p class="mb-0">How long does it take to build a website?</p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <ol>
                                            <li>Far far away, behind the word mountains</li>
                                            <li>Consonantia, there live the blind texts</li>
                                            <li>When she reached the first hills of the Italic Mountains</li>
                                            <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingThree" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapseThree"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <p class="mb-0">Can I help your IT Solution for business?</p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <ol>
                                            <li>Far far away, behind the word mountains</li>
                                            <li>Consonantia, there live the blind texts</li>
                                            <li>When she reached the first hills of the Italic Mountains</li>
                                            <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingFour" role="tab">
                                    <h2 class="mb-0">
                                        <button href="#collapseFour"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            <p class="mb-0">What are those requirements for ITSolutions?</p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                            right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <x-footer-card/>
@endsection
