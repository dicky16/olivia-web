@extends('user.layout.master')
@section('title')
<title>Profile</title>
@endsection
@section('content')
<div class="olv-breadcumb-area" style="background-image: url({{ asset('user/img/core-img/b.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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
                        <img src="{{ asset('')}}/user/img/bg-img/log.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12" style="padding-top: 80px;">
                    <div class="olv-blog-posts">
                        <div class="row">                            
                            <div class="col-12">
                                <span id="sejarah-view"></span>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="olv-about-features-area section_padding_100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-6">
                    <div class="olv-features-thumb wow fadeIn" data-wow-delay="0.5s">
                        <img src="{{ asset('user/img/info-img/lap.png') }}" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="olv-about-us-content">
                        <div class="section-heading">
                            <h2>Visi FPTVI</h2>
                        </div>
                        <div class="row">
                            <!-- Single Feature Area -->
                            <div class="col-10 ">
                                <div class="single-feature-area d-flex1">
                                    <div class="feature-icon mr-30">
                                        <img src="{{ asset('user/img/core-img/settings-2.png') }}" alt="">
                                    </div>

                                    <div class="feature-content">
                                        @if ($data[0] != null)
                                            {!! $data[0]->visi !!}
                                        @endif
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
        <div class="few-words-contents d-flex align-items-center justify-content-center wow fadeInLeftBig" data-wow-delay="0.1s" style="background-color: #5095a5">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11 col-lg-9 col-xl-7">
                        <div class="few-words-text">
                            <div class="section-heading">
                                <h2>Misi FPTVI</h2>
                            </div>
                            @if ($data[0] != null)
                            {!! $data[0]->misi !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="few-words-thumb bg-img wow fadeInRightBig" data-wow-delay="1.1s" style="background-image: url({{ asset('user/img/bg-img/cta-2.jpg') }});"></div>
    </section>

    <div class="workflow-img mt-4" style="display: block; margin-left: auto; margin-right: auto; width: 80%;">
        <img src="{{ url('') }}/{{$struktur}}" alt="">
    </div>

    <section class="olv-team-area section_padding_100" style="padding-top: 80px;">
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
                        @foreach($info as $infoStruktur)
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="{{ url('') }}/{{$infoStruktur->gambar}}" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>{{ $infoStruktur->nama }}</h4>
                                <span>{{ $infoStruktur->jabatan }}</span>
                                <p>{{ $infoStruktur->pt }}</p>
                                <!-- Social Info -->
                                <div class="team-social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js-user')
<script type="text/javascript">
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    loadSejarah();
    function loadSejarah()
    {
        $.ajax({
            type: 'GET',
            url: '{{url('profile/get-sejarah')}}',
            success: function(data) {
                if(data.success == true) {
                $('#sejarah-view').html(data.html);
                } else {
                    console.log(data.html)
                }
            }
        });
    }
});

</script>
@endsection