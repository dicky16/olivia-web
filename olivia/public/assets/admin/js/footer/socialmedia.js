$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    loadDataSocial();
    function loadDataSocial() {
        $('#table-social').load('/admin/sosialmedia/datatable', function() {
            var host = window.location.origin;
            $('#datatable-social').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/admin/sosialmedia/data',
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                    {data: 'nama',name: 'nama'},
                    {data: 'url',name: 'url'},
                    {
                        data: 'icon',
                        name: 'icon',
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
