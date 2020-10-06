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
                        <h2>INFO</h2>
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
                            @foreach($data as $berita)
                            <?php
                                $tglConvert = explode($berita->created_at, " ");
                                $tgl = date('d F Y', strtotime($tglConvert[0]));
                            ?>
                            <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="{{ url('') }}/{{$berita->foto}}" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="#">{{ $berita->name }}, </a><a href="#">{{$tgl}}</a></h6>
                                    </div>
                                    <!-- Post Title -->
                                    <h2>{{$berita->judul}}</h2>
                                    <!-- Post Excerpt -->
                                    <p>{!! $berita->deskripsi !!}</p>
                                    <!-- Read More btn -->
                                    <a href="{{ url('berita') }}/{{$berita->id}}">Read More</a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="olv-pagination-area">
                        <nav>
                            <ul class="pagination">
                                <!-- <li class="page-item active"><a class="page-link" href="#">1.</a></li>
                                <li class="page-item"><a class="page-link" href="#">2.</a></li>
                                <li class="page-item"><a class="page-link" href="#">3.</a></li> -->
                                {{ $data->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="olv-blog-sidebar">
                        <div class="latest-blog-posts mb-100">
                            <h5>Latest Posts</h5>
                            @foreach($latest as $terbaru)
                            <?php
                                $tglConvertLatest = explode($terbaru->created_at, " ");
                                $tglLatest = date('d F Y', strtotime($tglConvertLatest[0]));
                            ?>
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ url('') }}/{{$terbaru->foto}}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="#">{{ $terbaru->judul}}</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="">{{ $terbaru->name }}, </a>/<a href="#"> {{ $tglLatest}}</a></h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="single-latest-blog-post d-flex">
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
                            </div> -->
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js-user')
<script>
// $(document).ready(function() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
    
//     //show detail
//     $( "#read-more" ).click(function() {
//         var id = $(this).data('id');
//         location.replace('{{ url('berita') }}/' + id);
//     });
    
// });
</script>
@endsection