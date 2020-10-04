@extends('user.layout.master')
@section('title')
<title>FAQ</title>
@endsection
@section('content')
<div class="olv-breadcumb-area" style="background-image: url({{ asset('user/img/core-img/b.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>FAQ</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tanya Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <section class="elements-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="accordions mb-100 justify-content-center" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area start -->
                        <div id="faq"></div>
                        <!-- <div class="panel single-accordion">
                            <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">pertanyaan
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse">
                                <p>takok o.</p>
                            </div>
                        </div> -->
                        <!-- single accordian area start -->
                        <!-- <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">pertanyaan
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>takok o</p>
                            </div>
                        </div> -->
                        <!-- single accordian area start -->
                        <!-- <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">pertanyaan 
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>takok o.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <form class="form-horizontal" role="form" method="post" action="#">                       
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
                        </div>
                      </div>

                      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>
                      
                      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                        <div class="button">
                          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                        </div>
                      
                      </button>
                      
                    </form>
                </div>                
            </div>
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
    loadFAQ();
    function loadFAQ()
    {
        $.ajax({
            type: 'GET',
            url: '/faq/show/',
            success: function(data) {
                if(data.success == true) {
                //user_jobs div defined on page
                $('#faq').html(data.html);
                } else {
                    console.log(data.html)
                }
            }
        });
    }

    });
</script>
@endsection