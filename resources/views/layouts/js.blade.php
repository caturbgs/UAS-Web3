<!-- General JS Scripts -->
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}
<script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('popper/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('moment/moment.min.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js" integrity="sha256-LJkWYMcB83+zN8VO3EnSoNYHiBo93miOF47ZfsPSNDQ=" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> --}}
<script src="{{ asset('assets/js/stisla.js') }}"></script>
{{-- <script src="{{ asset('datatables/js/jquery.dataTables.min.js') }}" defer></script> --}}
<script src="{{ asset('datatables/datatables.min.js') }}" defer></script>

{{-- Function js --}}
<script>
    $(document).ready(function(){
        $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
        url: "{{ route('siswa_ajax.index') }}",
        },
        columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex' },
                {data: 'nisn', name: 'nisn'},
                {data: 'nama_siswa', name: 'nama_siswa'},
                {data: 'tanggal_lahir', name: 'tanggal_lahir'},
                {data: 'jenis_kelamin', name: 'jenis_kelamin'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'aksi', name: 'aksi', orderable: false}
            ]
        });

        $('#createBtn').click(function(){
            $('.modal-title').text("Tambah data Mahasiswa");
            $('#submitBtn').val("Tambah");
            $('#action').val("Add");
            $('#modalForm')[0].reset();
            $('#formModal').modal('show');
        });

        $('#modalForm').on('submit', function(event){
        event.preventDefault();
                if($('#action').val() == 'Add'){
                $.ajax({
                url:"{{ route('siswa_ajax.store') }}",
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data){
                    var html = '';
                    if(data.errors){
                        html = '<div class="alert alert-danger">';
                        for(var count = 0; count < data.errors.length; count++){
                            html += '<strong>' + data.errors[count] + '</strong>';
                        }
                        html +=     '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                    '<span aria-hidden="true">&times;</span></button>' +
                                '</div>';
                    }
                    if(data.success){
                        // html = '<div class="alert alert-success">' + data.success + '</div>';
                        html = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + data.success +
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                    '<span aria-hidden="true">&times;</span>' +
                                '</button>' +
                                '</div>';

                        $('#modalForm')[0].reset();
                        $('#datatable').DataTable().ajax.reload();
                        $('#formModal').modal('hide');
                    }
                    $('#form_result').html(html);
                }
                })
        }

            if($('#action').val() == "Edit"){
                $.ajax({
                url:"{{ route('siswa_ajax.update') }}",
                method:"POST",
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType:"json",
                success:function(data)
                {
                    var html = '';
                        if(data.errors){
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++){
                                html += '<strong>' + data.errors[count] + '</strong>';
                            }
                            html +=     '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                        '<span aria-hidden="true">&times;</span></button>' +
                                    '</div>';
                        }
                        if(data.success){
                            html = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + data.success +
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                        '<span aria-hidden="true">&times;</span>' +
                                    '</button>' +
                                    '</div>';

                            $('#modalForm')[0].reset();
                            $('#datatable').DataTable().ajax.reload();
                            $('#formModal').modal('hide');
                        }
                    $('#form_result').html(html);
                }
                });
            }
        });

        $(document).on('click', '.editBtn', function(){
            var id = $(this).attr('data-id');

            $.ajax({
                url:"/siswa_ajax/"+id+"/edit",
                dataType:"json",
                success:function(html){
                $('.modal-title').text("Edit data Mahasiswa");
                $('#nisn').val(html.data.nisn);
                $('#nama_siswa').val(html.data.nama_siswa);
                $('#tanggal_lahir').val(html.data.tanggal_lahir);
                // $('.jns').val(html.data.);
                $("input[value='" + html.data.jenis_kelamin + "']").prop('checked', true);
                $('#hidden_id').val(html.data.id);
                $('#submitBtn').val("Edit");
                $('#action').val("Edit");
                $('#formModal').modal('show');
                }
            })
        });

        var user_id;

        $(document).on('click', '.deleteBtn', function(){
            user_id = $(this).attr('data-id');
            // $('.modal-title').text("Konfirmasi Hapus data Mahasiswa");
            $('.modal-title').text("Konfirmasi Hapus data Mahasiswa");
            $('#confirmModal').modal('show');
            $('#ok_button').text('Hapus');});

        $('#ok_button').click(function(){
            $.ajax({
            url:"siswa_ajax/destroy/"+user_id,
            beforeSend:function(){
            $('#ok_button').text('Menghapus...');
            },
            success:function(data){
                var html = '';
                if(data.errors){
                    html = '<div class="alert alert-danger">';
                    for(var count = 0; count < data.errors.length; count++){
                        html += '<strong>' + data.errors[count] + '</strong>';
                    }
                        html +=     '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                    '<span aria-hidden="true">&times;</span></button>' +
                                '</div>';
                }
                if(data.success){
                    html = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + data.success +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '</div>';

                    setTimeout(function(){
                    $('#confirmModal').modal('hide');
                    $('#datatable').DataTable().ajax.reload();
                    }, 1500);
                }
                $('#form_result').html(html);
            }
            })
        });

});
</script>
{{-- End Function js --}}


<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
