$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    loadDataBerita();
    //load berita
    function loadDataBerita() {
        $('#table-berita').load('/admin/berita/datatable', function() {
            var host = window.location.origin;
            $('#datatable-berita').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/admin/berita/data',
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                    {data: 'judul',name: 'judul'},
                    {data: 'deskripsi',name: 'deskripsi'},
                    {
                        data: 'foto',
                        name: 'foto',
                        "render": function(data, type, row) {
                            return '<img src=" ' + host + '/'+ data + ' " style="height:100px;width:100px;"/>';
                        },
                        searchable: false
                    },
                    {data: 'keterangan',name: 'keterangan'},
                    {data: 'aksi',name: 'aksi',searchable: false,orderable: false}
                ]
            });
        });
    }

    //tambah berita
    $('body').on('submit', '#form-tambah-berita', function(e) {
        e.preventDefault();
        var formData = new FormData();

        var judul = $('input[name=judul]').val();
        var keterangan = $('input[name=keterangan]').val();
        var deskripsi = tinymce.get('deskripsi-berita').getContent();
        var gambar = $('#gambar')[0].files[0];

        formData.append('judul', judul);
        formData.append('keterangan', keterangan);
        formData.append('deskripsi', deskripsi);
        formData.append('gambar', gambar);

        $.ajax({
            type: 'POST',
            url: '/admin/berita',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if(data.status == "ok") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: 'Berhasil Menambahkan Berita',
                        timer: 1200,
                        showConfirmButton: false
                    });
                    loadDataBerita();
                    $('#BeritaModal').trigger('reset');
                } else if(data.status == "validation_error") {
                    if(data.status == "validation.max.file") {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Berhasil Editi an Kegiatan Akademik',
                            timer: 1200,
                            showConfirmButton: false
                        });
                    } else if(data.status == "validation.mimes") {
                        alert('erro')
                    } else {
                        alert('erro')
                    }
                }
            }
        });
    });
    //tampil edit
    $('body').on('click', '.btn-edit-berita', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: '/admin/edit/' + id,
            data: formData,
            success: function(data) {
                $('#editBeritaModal').modal('show');
                $('input[name=judul-edit]').val(data.data[0].judul);
                $('input[name=judul-keterangan]').val(data.data[0].judul);
                tinymce.get('deskripsi-berit-edit').setContent(data.data[0].judul);
                $('view-gambar-edit').attr('href', data.status[0].foto);
            }
        });
    });

});