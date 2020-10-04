@extends('user.layout.master')
@section('title')
<title>Berita</title>
@endsection
@section('content')
<div class="olv-breadcumb-area" style="background-image: url({{ asset('user/img/core-img/b.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Artikel</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="blog-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="olv-blog-posts">
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="{{ asset('user/img/blog-img/kongres.jpeg') }}" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="#">Dikti, </a><a href="#">6 November 2019</a></h6>
                                    </div>
                                    <!-- Post Title -->
                                    <h2>Kongres VI Forum Perguruan Tinggi Vokasi Indonesia</h2>
                                    <!-- Post Excerpt -->
                                    <p>SEMARANG – Kongres VI Forum Perguruan Tinggi Vokasi seluruh Indonesia (FPTVI) diselenggarakan di Gedung Prof. Sudharto, Universitas Diponegoro, Rabu (6/11). Pelaksanaan kongres kali ini mengundang perwakilan anggota forum dan guru-guru SMK se-Indonesia dengan tujuan terwujudnya konsep integrasi antara sekolah kejuruan, perguruan tinggi vokasi dan pengguna lulusan, dalam ini industri. </p>
                                    <!-- Read More btn -->
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="1.2s">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="{{ asset('user/img/blog-img/undip.jpg') }}" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="#">detikNews, </a>11 November 2019<a href="#"></a></h6>
                                    </div>
                                    <!-- Post Title -->
                                    <h2>Raih 53 Penghargaan, IPB Jadi Juara Umum Olimpiade Vokasi 2019</h2>
                                    <!-- Post Excerpt -->
                                    <p>Jakarta - Tim mahasiswa Sekolah Vokasi (SV) IPB University kembali Juara Umum Olimpiade Vokasi Indonesia (Olivia) ke-4 yang digelar di Universitas Diponegoro, Semarang. Ada sebanyak 53 mahasiswa IPB University yang meraih juara.</p>
                                    <!-- Read More btn -->
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="1.7s">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="{{ asset('user/img/blog-img/raker.jpg') }}" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="#">FPTVI, </a><a href="#">23 Maret 2020</a></h6>
                                    </div>
                                    <!-- Post Title -->
                                    <h2>Rapat Kerja Forum Pendidikan Tinggi Vokasi Indonesia Tahun 2020</h2>
                                    <!-- Post Excerpt -->
                                    <p>Dalam rangka implementasi prograrn kerja tahun 2020, Forum Pendidikan Tinggi Vokasi Indonesia (FPTVI) akan melaksanakan kegiatan Rapat Kerja FPTVI. Kegiatan tersebut akan dilaksanakan di Universitas Brawijaya, Malang pada tanggal 23 – 25 Maret 2020 dengan mengundang seluruh anggota FPTVI yang berjumlah 119 Perguruan Tinggi. Kegiatan ini juga akan menghadirkan pembicara dari dalam dan luar negeri, diantaranya dari Jerman dan Taiwan, KADIN Pusat, Direktur SMK serta dari FPTVI. Pada kegiatan ini juga akan dilaksanakan penandatanganan MOU/MOA antar Perguruan Tinggi dan dengan KADIN.</p>
                                    <!-- Read More btn -->
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="1.7s">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="{{ asset('user/img/blog-img/dipon.jpg') }}" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="#">tribunnews, </a><a href="#">12 November 2019</a></h6>
                                    </div>
                                    <!-- Post Title -->
                                    <h2>Smart Bin, Tempat Sampah Pintar dan Otomatis Buka Tutup Ciptaan Tim Sekolah Vokasi Undip</h2>
                                    <!-- Post Excerpt -->
                                    <p>SSEMARANG - Tim sekolah vokasi Universitas Diponegoro (Undip) mengembangkan inovasi smart bin, atau tempat sampah pintar.Smart bin besutan tim tersebut mampu membuka dan menutup secara otomatis.Juga mampu menyalakan alarm penanda jika tempat sampah tersebut telah terisi penuh.</p>
                                    <!-- Read More btn -->
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="olv-pagination-area">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1.</a></li>
                                <li class="page-item"><a class="page-link" href="#">2.</a></li>
                                <li class="page-item"><a class="page-link" href="#">3.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="olv-blog-sidebar">
                        <div class="latest-blog-posts mb-100">
                            <h5>Latest Posts</h5>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/ga.png') }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">Aturan Dikotomi Diploma 4 Perlu Diubah</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">Sindonews, </a>/<a href="#"> 20 February 2018</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/expo.jpeg') }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">Inovasi Sains dan Teknologi melalui Riset dan Pengembangan Produk Kreatif untuk Menyokong Percepatan Industri 4.0</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">FPTVI</a>/<a href="#"> 5 November 2018</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/hu.jpg') }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">Program Diploma IPB menjadi Tuan Rumah Kongres Ke-IV “FPTVI Sinergi Untuk Negeri”</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">FPTVI</a>/<a href="#"> 11 Oktober 2017.</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/work.jpeg') }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">Workshop: SDM Bersertifikasi Kompetensi sebagai upaya untuk menyiapkan Tenaga Kerja Siap Kerja dan Mandiri</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">FPTVI</a>/<a href="#"> 17 Juli 2018</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/23.jpg') }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">Indonesia-Australia Capai Kesepakatan Dalam Pengakuan Kerangka Kualifikasi</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">FPTVI</a>/<a href="#"> 26 September 2017</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/6.jpg') }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">ICASIE, Konferensi Internasional Pertama Fakultas Vokasi ITS</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">FPTVI</a>/<a href="#"> 6 August 2017</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/mentri.jpg') }}}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">Menteri Nasir: Untuk Pendidikan Vokasi, Dosen Boleh Tidak Lulusan S2</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">FPTVI</a>/<a href="#"> 8 December 2016</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ asset('user/img/blog-img/28.jpg') }}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">Kabar Forum Pendidikan Tinggi Vokasi Indonesia (FPTVI) 2019</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">teknikelektrod3</a>/<a href="#">  28 Juni 2019 </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection