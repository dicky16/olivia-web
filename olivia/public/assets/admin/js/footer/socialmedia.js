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
    //tAMBAH sosial media
    $('body').on('submit', '#form-tambah-social', function(e) {
        e.preventDefault();
        var formData = new FormData();

        var nama = $('input[name=nama]').val();
        var url = $('input[name=url]').val();
        var icon = $('#icon')[0].files[0];

        formData.append('nama', nama);
        formData.append('url', url);
        formData.append('icon', icon);

        $.ajax({
            type: 'POST',
            url: '/admin/sosialmedia',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if(data.status == "validation_error") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: data.message,
                    });
                } else if(data.status == "ok"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Berhasil Menambahkan social media',
                        timer: 1200,
                        showConfirmButton: false
                    });
                    loadDataSocial();
                    $('#form-tambah-social').trigger('reset');
                    $('#SocialModal').modal('hide');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan!',
                        timer: 1200,
                        showConfirmButton: false
                    });
                }
            }
        });
    });

    //tampil edit
    $('body').on('click', '.btn-edit-socialmedia', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var host = window.location.origin;
        $.ajax({
            type: 'GET',
            url: '/admin/sosialmedia/edit/' + id,
            success: function(data) {
                $('#editSocialModal').modal('show');
                $('input[name=nama-edit]').val(data.data[0].nama);
                $('input[name=url-edit]').val(data.data[0].url);
                $('#view-icon').attr('src', host + '/' + data.data[0].icon);
                $('#href-view').attr('href', host + '/' + data.data[0].icon);
                $('input[name=edit-id]').val(id);
            }
        });
    });

    //update sosial media
    $('body').on('submit', '#form-edit-social', function(e) {
        e.preventDefault();
        var formData = new FormData();
        var id = $('input[name=edit-id]').val();
        var nama = $('input[name=nama-edit]').val();
        var url = $('input[name=url-edit]').val();
        var icon = $('#icon-edit')[0].files[0];

        formData.append('nama', nama);
        formData.append('url', url);
        formData.append('icon', icon);

        $.ajax({
            type: 'POST',
            url: '/admin/sosialmedia/update/' + id,
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if(data.status == "validation_error") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: data.message,
                    });
                } else if(data.status == "ok"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Berhasil Update social media',
                        timer: 1200,
                        showConfirmButton: false
                    });
                    loadDataSocial();
                    $('#form-edit-social').trigger('reset');
                    $('#editSocialModal').modal('hide');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan!',
                        timer: 1200,
                        showConfirmButton: false
                    });
                }
            }
        });
    });


});
