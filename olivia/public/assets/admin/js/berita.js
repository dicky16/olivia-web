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
                    alert('ok')
                } else if(data.status == "validation_error") {
                    if(data.status == "validation.max.file") {
                        alert('error')
                    } else if(data.status == "validation.mimes") {
                        alert('erro')
                    } else {
                        alert('erro')
                    }
                }
            }
        });
    });

});