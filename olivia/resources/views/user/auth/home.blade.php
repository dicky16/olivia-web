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
                                      <form id="form-anggota">
                                      @csrf
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating">Fist Name</label>/ -->
                                              <input type="text" class="form-control" placeholder="Nama Tim" name="namaTim" required>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="Dosen Pembimbing" name="namaDosen" required>
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
                                              <input type="text" class="form-control" placeholder="NIDN Dosen Pembimbing" name="nidnDosen" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating">KTM Ketua Tim</label>/ -->
                                              <input type="text" class="form-control" placeholder="NIM Ketua Tim" name="nimKetua" required>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="Nama Institusi" name="namaInstitusi" required>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="bmd-label-floating" >KTM Ketua Tim</label>
                                              <input type="file" class="form-control" placeholder="KTM Ketua Tim" id="ktmKetua" required>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="email" class="form-control" placeholder="Email" name="email" value="{{auth()->user()->email}}" disabled>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <hr>
                                        <div class="col text-center">
                                        <h4>Anggota</h4>
                                        </div>
                                        <hr>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="Nama Anggota 1" name="namaAnggota1" required>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="Nama Anggota 2" name="namaAnggota2" required>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="NIM Anggota 1" name="nimAnggota1" required>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <input type="text" class="form-control" placeholder="NIM Anggota 2" name="nimAnggota2" required>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="bmd-label-floating" >KTM Anggota 1</label>
                                              <input type="file" class="form-control" placeholder="KTM Anggota 1" id="ktmAnggota1" required>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="bmd-label-floating" >KTM Anggota 2</label>
                                              <input type="file" class="form-control" placeholder="KTM Anggota 2" id="ktmAnggota2" required>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                                        <div class="clearfix"></div>
                                      </form>
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
    $('body').on('submit', '#form-anggota', function(e) {
        e.preventDefault();
        var formData = new FormData();

        var nama_tim = $('input[name=namaTim]').val();
        var nama_dosen = $('input[name=namaDosen]').val();
        var nidn_dosen = $('input[name=nidnDosen]').val();
        var nim_ketua = $('input[name=nimKetua]').val();
        var nama_institusi = $('input[name=namaInstitusi]').val();
        var ktm_ketua = $('#ktmKetua')[0].files[0];
        var email = $('input[name=email]').val();
        var nama_anggota1 = $('input[name=namaAnggota1]').val();
        var nama_anggota2 = $('input[name=namaAnggota2]').val();
        var nim_anggota1 = $('input[name=nimAnggota1]').val();
        var nim_anggota2 = $('input[name=nimAnggota2]').val();
        var ktm_anggota1 = $('#ktmAnggota1')[0].files[0];
        var ktm_anggota2 = $('#ktmAnggota2')[0].files[0];

        // var judul = $('input[name=judul]').val();
        // var gambar = $('#gambar')[0].files[0];
        formData.append('namaTim', nama_tim);
        formData.append('namaDosen', nama_dosen);
        formData.append('nidnDosen', nidn_dosen);
        formData.append('nimKetua', nim_ketua);
        formData.append('namaInstitusi', nama_institusi);
        formData.append('ktmKetua', ktm_ketua);
        formData.append('email', email);
        formData.append('namaAnggota1', nama_anggota1);
        formData.append('namaAnggota2', nama_anggota2);
        formData.append('nimAnggota1', nim_anggota1);
        formData.append('nimAnggota2', nim_anggota2);
        formData.append('ktmAnggota1', ktm_anggota1);
        formData.append('ktmAnggota2', ktm_anggota2);
        $.ajax({
            type: 'POST',
            url: 'user',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
              if(data.success == true) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Anda telah disimpan!',
                    timer: 1200,
                    showConfirmButton: false
                  });
              } else if(data.success == false) {
                if(data.error == 'validation_error') {
                  Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: ' Error : ' + data.message ,
                  });
                } else {
                  Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Terjadi Kesalahan mohon coba lagi!',
                    timer: 1200,
                    showConfirmButton: false
                  });
                }
              } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Terjadi Kesalahan mohon coba lagi!',
                    timer: 1200,
                    showConfirmButton: false
                  });
                  console.log('error');
              }
            }
        });
    });

  });
</script>

<script>
  Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: 'Data Anda berhasil disimpan!',
    timer: 1200,
    showConfirmButton: false
  });
</script>

@endsection