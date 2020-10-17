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

</div>
