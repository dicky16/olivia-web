$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

loadDataSejarah();
function loadDataSejarah() {
    $('#table-sejarah').load('/admin/sejarah/datatable', function() {
        var host = window.location.origin;
        $('#datatable-sejarah').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/admin/sejarah/data',
                type: 'GET'
            },
            columns: [
                {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                {data: 'nama',name: 'nama'},
                {
                    data: 'sejarah',
                    name: 'sejarah',
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
