$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //load slider
    loadSlider();
    //load berita
    function loadSlider() {
        $('#table-slider').load('/admin/slider/datatable', function() {
            var host = window.location.origin;
            $('#datatable-slider').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/admin/slider/data',
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                    {data: 'nama',name: 'nama'},
                    {
                        data: 'gambar',
                        name: 'gambar',
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