$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    loadDataFAQ();
    //load data FAQ
    function loadDataFAQ() {
        $('#table-faq').load('/admin/faq/datatable', function() {
            var host = window.location.origin;
            $('#datatable-faq').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/admin/faq/data',
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex',name: 'DT_RowIndex',searchable: false},
                    {data: 'pertanyaan',name: 'pertanyaan'},
                    {data: 'jawaban',name: 'jawaban'},
                    {data: 'status',name: 'status'},
                    {data: 'aksi',name: 'aksi',searchable: false,orderable: false}
                ]
            });
        });
    }
});