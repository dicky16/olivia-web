@extends('admin.layout.master')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Berita</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <button type="button" name="button" class="btn btn-primary"  data-toggle="modal" data-target="#beritaModal" id="tambah">+Tambah Berita</button>
        <br><br>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Berita</div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- <div id="table-artikel"></div> -->
                    <table class="table table-bordered" id="datatable-artikel" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Judul</td>
                                <td>Ini deskripsi</td>
                                <td>gambar cuy</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- modal tambah berita -->
<div class="modal fade" id="beritaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="" id="form-tambah-artikel">
                    @csrf

                    <label for="namatenaga">Judul</label>
                    <input type="text" class="form-control" id="" name="nama">

                    <label for="alamat" class="mt-2">Deskripsi</label>
                    <textarea type="tex" class="form-control" id="deskripsi-artikel" name=""> </textarea>

                    <div class="form-group mt-3">
                        <label for="file">Gambar</label>
                        <!-- <input input id="gambar" type="file" name="gambar" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01"> -->
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection
@section('js-ajax')
<script src="{{ asset('admin/js/berita.js') }}"></script>
@endsection