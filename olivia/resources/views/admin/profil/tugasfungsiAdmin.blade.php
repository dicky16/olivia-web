@extends('admin.layout.master')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Visi Dan Misi</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
    </div>


    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Table Tugas Dan Fungsi</h6>
        </div>

        <div class="d-sm-flex align-items-center m-3">
            <a type="submit" class="btn btn-primary ml-2" href="#" data-toggle="modal" data-target="#ArtikelModal">+
                Add Tugas & Fungsi</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <!-- <div id="datatable-berita"></div> -->
                    <table class="table table-bordered" id="datatable-artikel" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tugas</th> 
                                <th>Fungsi</th>                        
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Berita Modal-->
<div class="modal fade" id="ArtikelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tugas & Fungsi</h5>
                <button class="close btn-close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="" id="form-tambah-berita">
                    @csrf

                    <label for="deskripsi" class="mt-2">Tugas</label>
                    <textarea type="text" class="form-control" id="deskripsi-berita" name=""></textarea>
                    <label for="deskripsi" class="mt-2">Fungsi</label>
                    <textarea type="text" class="form-control" id="deskripsi-berita" name=""></textarea>

                </form>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-close" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" id="btn-tambah-berita" type="button" data-penulis="{{ auth()->user()->id }}">Submit</button>
                <button class="btn btn-primary btn-loading" type="button" style="display: none;" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Memproses...
                </button>
            </div>
        </div>
    </div>
</div>
@endsection