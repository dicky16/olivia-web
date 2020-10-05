@extends('admin.layout.master')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Social Media</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
    </div>


    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Table Social Media</h6>
        </div>

        <div class="d-sm-flex align-items-center m-3">
            <a type="submit" class="btn btn-primary ml-2" href="#" data-toggle="modal" data-target="#SocialModal">+
                Add Social Media</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                     <div id="table-social"></div> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Social Modal-->
<div class="modal fade" id="SocialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Social Media</h5>
                <button class="close btn-close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <form id="form-tambah-social">
                    @csrf

                    <label for="namaSocial">Nama Social Media</label>
                    <input type="text" class="form-control" name="nama">
                    
                    <label for="linkSocial">Link Social</label>
                    <input type="text" class="form-control" name="url">

                    <div class="form-group mt-3">
                        <label for="gambar" class="mt-2">Icon</label>
                        <input id="icon" type="file" name="gambar" accept="image/*" aria-describedby="inputGroupFileAddon01">
                    </div>
                  
                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-close" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="hidden" name="edit-id">
                        <button class="btn btn-primary btn-loading" type="button" style="display: none;" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Memproses...
                        </button>
                    </div>
                   

                </form>

            </div>
            
        </div>
    </div>
</div>

<!-- edit Social Modal-->
<div class="modal fade" id="editSocialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Social Media</h5>
                <button class="close btn-close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <form id="form-edit-social">
                    @csrf

                    <label for="namaSocial">Nama Social Media</label>
                    <input type="text" class="form-control" name="nama-edit">
                    
                    <label for="linkSocial">Link Social</label>
                    <input type="text" class="form-control" name="url-edit">

                    <label for="linkSocial">View Icon</label>
                    <img src="" alt="" id="view-icon" style="width: 60%; height: 60%; border-radius: 10px; display: block; margin-left: auto; margin-right: auto;">

                    <div class="form-group mt-3">
                        <label for="gambar" class="mt-2">Icon</label>
                        <input id="icon-edit" type="file" name="gambar" accept="image/*" aria-describedby="inputGroupFileAddon01">
                    </div>
                  
                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-close" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <button class="btn btn-primary btn-loading" type="button" style="display: none;" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Memproses...
                        </button>
                    </div>
                   

                </form>

            </div>
            
        </div>
    </div>
</div>
@endsection
@section('js-ajax')
<script src="{{ asset('admin/js/footer/socialmedia.js') }}"></script>
@endsection