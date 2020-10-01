$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

loadDataFoto();
function loadDataFoto() {
    $('#table-video').load('/admin/video/datatable', function() {
        var host = window.location.origin;
        $('#datatable-video').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/admin/video/data',
                type: 'GET'
            },
            columns: [
                {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                {data: 'nama',name: 'nama'},
                {
                    data: 'video',
                    name: 'video',
                    "render": function(data, type, row) {
                        return '<img src=" ' + host + '/'+ data + ' " style="height:100px;width:100px;"/>';
                    },
                    searchable: false
                },
                {data: 'aksi',name: 'aksi',searchable: false,orderable: false}
            ]
        });
    });
}

});
