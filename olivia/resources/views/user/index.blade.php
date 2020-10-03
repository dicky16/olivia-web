<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title -->
    <title>Olivia</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('user/img/core-img/atomic.png') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('user/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet">

</head>

<body>
 
    <div id="preloader">
        <div class="olv-preloader"></div>
    </div>

  
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.html"><img src="{{ asset('user/img/core-img/o.png') }}" alt="logo"></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#olv-navbar" aria-controls="olv-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="olv-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="profile.html">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="artikel.html">Berita</a></li>
                                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                                </ul>
                                <!-- Search Form Area Start -->
                                <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
                                        <button type="submit" class="d-none"><img src="{{ asset('user/img/core-img/search-icon.png') }}" alt="Search"></button>
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div class="search-button">
                                    <a href="#" id="search-btn"><img src="{{ asset('user/img/core-img/search-icon.png') }}" alt="Search"></a>
                                </div>
                                <!-- Login/Register btn -->
                                <div class="login-register-btn">
                                    <a href="#">Login</a>
                                    <a href="#">/ Register</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
 
    <section class="welcome_area clearfix" id="home" style="background-image: url(img/bg-img/d.png)">
=======
@extends('user.layout.master')
@section('content')
<section class="welcome_area clearfix" id="home" style="background-image: url({{ asset('user/img/bg-img/d.png') }})">
>>>>>>> dd1ed61e943808d49cf5f938a9ea6117690b16ae
        
    </section >
    
        <div class="hero-slides owl-carousel" style="background-image: url(img/bg-img/b22.png)">
            <img class="slide-img" src="img/bg-img/poto.png" alt="" style="width: 70%; margin: auto;">
            <img class="slide-img" src="img/bg-img/poto.png" alt="" style="width: 70%; margin: auto;">          
            
        </div>
  
   
    <section class="olv-more-services-area d-sm-flex clearfix justify-content-center" style="background-image: url(img/bg-img/d.png)">
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".1s">
                <img src="img/core-img/ki.png" alt="">
                <h4>Karya Ilmiah</h4>
                <p>Karya Ilmiah mempersentasikan gagasan dengan tema "Creating Innovation and Competence in The New Normal Era".</p>
            </div>
        </div>
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".4s">
                <img src="img/core-img/video.png" alt="">
                <h4>Video Edukasi</h4>
                <p>Video Edukasi mempertontonkan hiburan dengan tema "Creating Innovation and Competence in The New Normal Era".</p>
            </div>
        </div>
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".7s">
                <img src="img/core-img/web.png" alt="">
                <h4>Web Desain</h4>
                <p>Web Desain menampilkan suguhan dengan tema "Creating Innovation and Competence in The New Normal Era".</p>
        </div>
    </section>
   
    <section class="olv-workflow-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-0">
                        <p>Our Work Flow</p>
                        <h2>This is how we work on Projects</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="workflow-img">
            <img src="{{ asset('user/img/core-img/work-progress.png') }}" alt="">
        </div>

        <div class="workflow-slides-area">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="olv-service-slides owl-carousel">
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>01.</h2>
                            <h4>Pendaftaran peserta dan pengiriman full karya.</h4>
                            <p>11 Agustus – 10 Oktober 2020.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>02.</h2>
                            <h4>Proses seleksi.</h4>
                            <p>11 - 15 Oktober 2020.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>03.</h2>
                            <h4>Pengumuman finalis.</h4>
                            <p>16 Oktober 2020</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>04.</h2>
                            <h4>Presentasi final.</h4>
                            <p>25 - 30 Oktober 2020</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>05.</h2>
                            <h4>Peniliaian dan pengumuman Juara.</h4>
                            <p>10 November 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="olv-workflow-slides owl-carousel">
                            
                            <div class="single-workflow-area d-flex">
                                <h2>1.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>11 Agustus – 10 Oktober 2020</h4>
                                    <p>Pendaftaran peserta dan pengiriman full karya.</p>
                                </div>
                            </div>
                            
                            <div class="single-workflow-area d-flex">
                                <h2>2.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>11 - 15 Oktober 2020</h4>
                                    <p>Proses seleksi.</p>
                                </div>
                            </div>
                            
                            <div class="single-workflow-area d-flex">
                                <h2>3.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>16 Oktober 2020</h4>
                                    <p>Pengumuman finalis.</p>
                                </div>
                            </div>
                            
                            <div class="single-workflow-area d-flex">
                                <h2>4.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>25 - 30 Oktober 2020</h4>
                                    <p>Presentasi final.</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>5.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>10 November 2020</h4>
                                    <p>Peniliaian dan pengumuman Juara.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    
    <section class="olv-workflow-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-0">
                        <h2>IKI GAWE INFOGRAFIS</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="workflow-img">
            <!-- <img src="img/core-img/work-progress.png" alt=""> -->
        </div>
    </section>
    
    <section class="olv-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url({{ asset('user/img/bg-img/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                            <h2>"Creating Innovation and Competence in The New Normal Era"</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection