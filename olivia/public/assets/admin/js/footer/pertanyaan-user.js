$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    loadDataPertanyaan(status = "");
    //load data pertanyaan
    function loadDataPertanyaan(status) {
        $('#table-pertanyaan').load('/admin/tanya/datatable', function() {
            var host = window.location.origin;
            $('#datatable-pertanyaan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/admin/tanya/data',
                    type: 'GET',
                    data: {status: status},
                },
                columns: [
                    {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                    {data: 'nama',name: 'nama'},
                    {data: 'pertanyaan',name: 'pertanyaan'},
                    {data: 'email',name: 'email'},
                    {data: 'state',name: 'state'},
                    {data: 'aksi',name: 'aksi',searchable: false,orderable: false}
                ]
            });
        });
    }

    $('body').on('click', '#btn-0', function(e) {
        e.preventDefault();
        loadDataPertanyaan(status = "0");
    });

    $('body').on('click', '#btn-1', function(e) {
        e.preventDefault();
        loadDataPertanyaan(status = "1");
    });

    $('body').on('click', '#btn-semua', function(e) {
        e.preventDefault();
        loadDataPertanyaan(status = "");
    });

    //balas pertanyaan
    $('body').on('click', '#btn-balas-pertanyaan', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: 'GET',
            url: '/admin/tanya/show/' + id,
            success: function(data) {
                $("#BalasPertanyaan").modal('show');
                $('input[name=nama]').val(data.data[0].nama);
                $('input[name=email]').val(data.data[0].email);
                $('input[name=pertanyaan]').val(data.data[0].pertanyaan);
            }
        });
    });

});