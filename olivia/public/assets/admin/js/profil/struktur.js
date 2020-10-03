$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

loadDataStruktur();
function loadDataStruktur() {
    $('#table-struktur').load('/admin/struktur/datatable', function() {
        var host = window.location.origin;
        $('#datatable-struktur').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/admin/struktur/data',
                type: 'GET'
            },
            columns: [
                {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                {data: 'nama',name: 'nama'},
                {
                    data: 'struktur',
                    name: 'struktur',
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
