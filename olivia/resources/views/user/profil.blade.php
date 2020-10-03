@extends('user.layout.master')
@section('content')
<div class="olv-breadcumb-area" style="background-image: url({{ asset('user/img/core-img/b.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Baca Tentang Kita</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="olv-aboutUs-area section_padding_100_0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="olv-about-us-content">
                        <div class="section-heading">
                            <h2>Forum Perguruan Tinggi Vokasi Indonesia (FPTVI)</h2>
                        </div>
                        <p>FPTVI 2020 merupakan agenda Tahunan dari Forum Perguruan Tinggi Vokasi Indonesia (FPTVI) yang akan diselenggarakan oleh Fakultas Vokasi Institut Teknologi Sepuluh Nopember. Kegiatan ini meliputi dua rangkaian acara yaitu Kongres Vokasi dan Lomba (OLIVIA 2020).</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="olv-about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{ asset('user/img/bg-img/log.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="olv-about-features-area section_padding_100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-4">
                    <div class="olv-features-thumb wow fadeIn" data-wow-delay="0.5s">
                        <img src="img/bg-img/kom.png" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="olv-about-us-content">
                        <div class="section-heading">
                            <p>Features</p>
                            <h2>Visi FPTVI</h2>
                        </div>
                        <div class="row">
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area d-flex1">
                                    <div class="feature-icon mr-30">
                                        <img src="img/core-img/settings-2.png" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <p>Menjadi jejaring yang saling menguatkan dalam pengembangan pendidikan vokasi Indonesia yang menyiapkan sumberdaya manusia yang terampil, berkecakapan hidup, dan berkepribadian Pancasila Untuk Indonesia yang lebih baik.</p>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="few-words-from-ceo d-md-flex">
        <div class="few-words-contents d-flex align-items-center justify-content-center wow fadeInLeftBig" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11 col-lg-9 col-xl-7">
                        <div class="few-words-text">
                            <div class="section-heading">
                                <h2>Misi FPTVI</h2>
                            </div>
                            <p>Membangun jejaring sinergi di antara penyelenggara Pendidikan Tinggi Vokasi dengan lembaga lainnya dalam rangka membangun daya saing Pendidikan Tinggi Vokasi di Indonesia.</p>
                            <br>
                            <p>Mengupayakan sistem Pendidikan Tinggi Vokasi untuk membentuk sumber daya manusia yang berkepribadian, berakhlak dan bermartabat untuk kemandirian bangsa.</p>
                            <br>
                            <p>Mengembangkan sistem Pendidikan Tinggi Vokasi yang sanggup meningkatkan mutu sumberdaya manusia yang berkepribadian, berakhlak dan bermartabat mulia.</p>
                            <br>
                            <p>Mengembangkan sistem Pendidikan Tinggi Vokasi yang sanggup meningkatkan mutu sumberdaya manusia yang berkepribadian, berakhlak dan bermartabat mulia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="few-words-thumb bg-img wow fadeInRightBig" data-wow-delay="1.1s" style="background-image: url(img/bg-img/cta-2.jpg);"></div>
    </section>
    
    <section class="olv-team-area section_padding_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section-heading text-center">
                        <h2>Temui Tim Luar Biasa Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="olv-team-slides owl-carousel">
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/ketua.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Prof. Dr. Ir. Budiono, M.Si.</h4>
                                <span>Ketua</span>
                                <p>Undip</p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/wakil 1.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Prof. Dr. Ir. Sigit Darmawan.</h4>
                                <span>Wakil Ketua 1</span>
                                <p>ITS</p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/wakil 2.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Prof. Dr. Ir. Sigit Darmawan.</h4>
                                <span>Wakil Ketua 2</span>
                                <p>UNY</p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/sekjen.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Dr. Ida Hayu Dwimawanti</h4>
                                <span>Sekretaris Jendral</span>
                                <p>UNDIP</p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/bendahara.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Anafil Windriya, S.E., M.M.</h4>
                                <span>Bendahara</span>
                                <p>UNDIP</p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection