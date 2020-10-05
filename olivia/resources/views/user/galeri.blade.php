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
            <!-- <div id="foto-view"></div> -->
            <span id="foto-view"></span>
            
        </div>

        <!-- Discover More btn -->
        <div class="col-12 text-center mt-100">
            <a href="#" class="btn olv-btn">Load More</a>
        </div>
    </section>
@endsection
@section('js-user')
<script>
    $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    loadFOTO();
    function loadFOTO()
    {
        $.ajax({
            type: 'GET',
            url: '/galeri/show/',
            success: function(data) {
                if(data.success == true) {
                //user_jobs div defined on page
                $('#foto-view').html(data.html);
                } else {
                    console.log(data.html)
                }
            }
        });
    }

    });
</script>
@endsection