<?php
$berita = Session::get('berita');
$pengumuman = Session::get('pengumuman');
$lomba = Session::get('lomba');
?>
<div class="modal-body bg-white" id="display-search">
@foreach($berita as $brt)
<h4>{{ $brt->judul }}</h4>
<!-- <p>{!! $brt->deskripsi !!}</p> -->
<hr>
@endforeach
@foreach($pengumuman as $brt)
<h4>{{ $brt->judul }}</h4>
<!-- <p>{!! $brt->deskripsi !!}</p> -->
<hr>
@endforeach
@foreach($lomba as $brt)
<h4>{{ $brt->nama_lomba }}</h4>
<!-- <p>{!! $brt->deskripsi !!}</p> -->
<hr>
@endforeach

<div class="olv-pagination-area d-flex justify-content-center">
    <nav>
        <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1.</a></li>
            <li class="page-item"><a class="page-link" href="#">2.</a></li>
            <li class="page-item"><a class="page-link" href="#">3.</a></li>
        </ul>
    </nav>
</div>

</div>
