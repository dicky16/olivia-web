@extends('user.layout.master')
@section('content')
<div class="olv-breadcumb-area" style="background-image: url({{ asset('user/img/core-img/b.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Awal</h2>
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
       
            <div class="row p-5">
              <div class="col-md-2 mb-3">
                <ul class="nav nav-pills flex-column" id="experienceTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Peserta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#prof" role="tab" aria-controls="profile" aria-selected="false">Unggah Berkas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="download-tab" data-toggle="tab" href="#down" role="tab" aria-controls="profile" aria-selected="false">Ketentuan Lomba</a>
                  </li>
                </ul>
              </div>
              <!-- /.col-md-4 -->
              <div class="col-md-10" style="background-color: #fff;box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);border-radius: 5px;">
                <div class="tab-content" id="experienceTabContent">

                  <div class="tab-pane fade show active text-left text-light" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>Data Peserta</h3>
                    <ul class="pt-2">
                                    <div class="card-body">
                                      <!-- <form> -->
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating">Fist Name</label>/ -->
                                              <input type="text" class="form-control" placeholder="Nama Tim" name="nama-tim">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="Dosen Pembimbing" name="nama-dosen">
                                            </div>
                                          </div>                                          
                                        </div>
                                        
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating">Email address</label> -->
                                              <input type="text" class="form-control" placeholder="Nama Ketua Tim" value="{{auth()->user()->name}}" disabled>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="NIDN Dosen Pembimbing" name="nidn-dosen">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating">Fist Name</label>/ -->
                                              <input type="email" class="form-control" placeholder="NIM Ketua Tim" name="nim-ketua">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="Nama Institusi" name="nama-institusi">
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <input type="file" class="form-control" placeholder="KTM Ketua Tim" id="ktm-ketua">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <!-- <div class="row">
                                          <div class="col-md-6">
                                          </div>
                                        </div> -->
                                        <hr>
                                        <div class="col text-center">
                                        <h4>Anggota</h4>
                                        </div>
                                        <hr>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="Nama Anggota 1">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="Nama Anggota 2">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="NIM Anggota 1">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="NIM Anggota 2">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="KTM Anggota 1">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="KTM Anggota 2">
                                            </div>
                                          </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary" id="btn-simpan">Simpan Data</button>
                                        <div class="clearfix"></div>
                                      <!-- </form> -->
                                    </div>
                    </ul>
                  </div>

                  <div class="tab-pane fade text-left text-light" id="prof" role="tabpanel" aria-labelledby="profile-tab">
                    <h3>Unggah Berkas</h3>
                    <span class="date-range code-font">Other Details</span>
                    <ul class="pt-2">
                      <div class="card-body">
                        <form>                        
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">KTM Ketua</label><br>
                                  <div class="custom-file-upload">
                                    <input type="file" id="file" name="myfiles[]" multiple />
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">KTM Anggota 1</label><br>
                                  <div class="custom-file-upload">
                                    <input type="file" id="file" name="myfiles[]" multiple />
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">KTM Anggota 2</label><br>
                                  <div class="custom-file-upload">
                                    <input type="file" id="file" name="myfiles[]" multiple />
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Bukti Pembayran</label><br>
                                  <div class="custom-file-upload">
                                    <input type="file" id="file" name="myfiles[]" multiple />
                                  </div>
                              </div>
                            </div>
                          </div><br>

                          <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                          <div class="clearfix"></div>
                        </form>                                             
                      </div>
                    </ul>
                  </div>

                  <div class="tab-pane fade text-left text-light" id="down" role="tabpanel" aria-labelledby="download-tab">
                    <h3>Ketentuan Lomba</h3><br>
                    <ul class="pt-2">
                      <h5>1. Karya Tulis Ilmiah</h5>
                        <div style="padding-left: 18px">
                          <p>Download panduan lomba di link berikut</p>
                          <a href="javascript:;" class="btn btn-primary btn-round">Download</a>
                        </div><br>
                      
                      <h5>2. Video Edukasi</h5>  
                        <div style="padding-left: 18px">
                          <p>Download panduan lomba di link berikut</p>
                          <a href="javascript:;" class="btn btn-primary btn-round">Download</a>
                        </div><br>
                      <h5>3. Desain Website</h5>  
                        <div style="padding-left: 18px">
                          <p>Download panduan lomba di link berikut</p>
                          <a href="javascript:;" class="btn btn-primary btn-round">Download</a>
                        </div><br>
                      
                    </ul>
                  </div>

                </div>
                <!--tab content end-->
              </div><!-- col-md-8 end -->
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

    $("body").on("click", "#btn-simpan", function(e) {
      e.preventDefault();
      
    });
});
</script>
@endsection