@extends('user.layout.master')
@section('content')
<section class="welcome_area clearfix" id="home" style="background-image: url({{ asset('user/img/bg-img/g.png') }})">
        <section class="olv-aboutUs-area section_padding_100_0">
            <div class="container">
                <div class="row align-items-center">                
                    <div class="col-12 col-md-6">
                        <div class="olv-about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                            <img src="{{ asset('user/img/core-img/fix.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="olv-about-us-content">
                            <div class="section-heading">
                                <h2>OLIMPIADE VOKASI INDONESIA</h2>
                            </div>
                            <p>OLIVIA 2020 bertema “Creating safe and productive innovation and competency in the new normal era”. Tema ini diusung oleh Fakultas Vokasi Institut Teknologi Sepuluh Nopember sebagai tuan rumah penyelenggara yang didasari pada pengedepanan nilai-nilai inovasi dan produktivitas di era new normal.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="hero-slides owl-carousel">
            <img class="slide-img" src="{{ asset('user/img/bg-img/poto.png') }}" alt="" style="width: 70%; margin: auto;">
            <img class="slide-img" src="{{ asset('user/img/bg-img/poto.png') }}" alt="" style="width: 70%; margin: auto;">          
            
        </div>
    </section>
        
  
   
    <section class="olv-more-services-area d-sm-flex clearfix justify-content-center" style="background-image: url({{ asset('user/img/bg-img/b23.png') }})">
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".1s">
                <img src="{{ asset('user/img/core-img/ki.png') }}" alt="">
                <h4>Karya Ilmiah</h4>
                <p>Karya Ilmiah mempersentasikan gagasan dengan tema "Creating Innovation and Competence in The New Normal Era".</p>
            </div>
        </div>
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".4s">
                <img src="{{ asset('user/img/core-img/video.png') }}" alt="">
                <h4>Video Edukasi</h4>
                <p>Video Edukasi mempertontonkan hiburan dengan tema "Creating Innovation and Competence in The New Normal Era".</p>
            </div>
        </div>
        <div class="single-more-service-area">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".7s">
                <img src="{{ asset('user/img/core-img/web.png') }}" alt="">
                <h4>Web Desain</h4>
                <p>Web Desain menampilkan suguhan dengan tema "Creating Innovation and Competence in The New Normal Era".</p>
            </div>
        </div>
    </section>   

    <section class="olv-workflow-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-0">
                        <h2>Alur Pendaftaran</h2>
                        <p>OLIVIA 2020</p>
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
                        @foreach($data as $lomba)
                        <?php
                            $tglConvertLatest = explode("|", $data[0]->jadwal);
                            
                            $jadwal1 = date('d F Y', strtotime($tglConvertLatest[0]));
                            $jadwal2 = date('d F Y', strtotime($tglConvertLatest[1]));
                        ?>
                            <!-- Single Service Area -->
                            <div class="single-service-area text-center">
                                <h2 class="color color-primary">{{ $lomba->nama_lomba }}</h2>
                                <h4>Pendaftaran peserta dan pengiriman full karya.</h4>
                                <p>{{ $jadwal1}} – {{ $jadwal2}}</p>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="olv-workflow-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="section-heading text-center mb-0">
                        <h2>INFO</h2>
                        <div class="container">
                            <div class="row align-items-center">                
                                <div class="col-12 col-md-6">
                                    <div class="olv-about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                                        <img src="{{ asset('user/img/info-img/2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="olv-about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                                        <img src="{{ asset('user/img/info-img/2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="col-12 mt-5">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                        <br><br><br><br>
                            <h2>"Creating Innovation and Competence in The New Normal Era"</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection