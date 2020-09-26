$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    loadDataArtikel();
    //load datatable
    function loadDataArtikel() {
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
                    {data: 'lampiran',name: 'lampiran'},
                    {data: 'tanggal',name: 'tanggal'},
                    {data: 'aksi',name: 'aksi',searchable: false,orderable: false}
                ]
            });
        });
    }
    $('body').on('click', '#tambah', function(e) {
        e.preventDefault();
    });
    
});