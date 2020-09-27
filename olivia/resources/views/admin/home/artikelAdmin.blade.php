@extends('admin.layout.master')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
    </div>


    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Artikel</h6>
        </div>

        <div class="d-sm-flex align-items-center m-3">
            <a type="submit" class="btn btn-primary ml-2" href="#" data-toggle="modal" data-target="#ArtikelModal">+
                Add Artikel</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <!-- <div id="datatable-berita"></div> -->
                    <table class="table table-bordered" id="datatable-artikel" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>Lampiran</th>
                                <th>Tanggal</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                <button class="close btn-close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="" id="form-tambah-berita">
                    @csrf

                    <label for="judulBerita">Judul Artikel</label>
                    <input type="text" class="form-control" id="" name="judul">


                    <label for="deskripsi" class="mt-2">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi-berita" name=""> </textarea>

                    <div class="form-group mt-3">
                        <label for="file" class="mt-2">Gambar</label>
                        <input input id="file-upload" type="file" name="gambar" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                    </div>


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