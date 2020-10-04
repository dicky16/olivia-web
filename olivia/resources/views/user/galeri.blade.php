@extends('user.layout.master')
@section('title')
<title>Galeri</title>
@endsection
@section('content')
<div class="olv-breadcumb-area" style="background-image: url({{ asset('user/img/core-img/b.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">poto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="olv-portfolio-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="olv-projects-menu">
                        <div class="portfolio-menu">
                            <p class="active" data-filter="*">All</p>
                            <p data-filter=".18">2018</p>
                            <p data-filter=".19">2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="olv-portfolio">
            <div class="single_gallery_item 18">
                <img src="{{ asset('user/img/gall-img/2018a/1.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/2.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item gd 18">
                <img src="{{ asset('user/img/gall-img/2018a/4.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/5.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/9.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 18">
                <img src="{{ asset('user/img/gall-img/2018a/2.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 18">
                <img src="{{ asset('user/img/gall-img/2018a/3.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/1.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/4.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/6.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/3.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item 19">
                <img src="{{ asset('user/img/gall-img/2019a/8.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DOKUMENTASI</h4>
                        <a href="#">OLIVIA</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discover More btn -->
        <div class="col-12 text-center mt-100">
            <a href="#" class="btn olv-btn">Load More</a>
        </div>
    </section>
@endsection