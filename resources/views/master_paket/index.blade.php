@extends('layouts.master')

@section('title')
Master Paket
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">
                    @yield('title')
                </h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <button onclick="addForm('{{ route('master.store') }}')" class="btn btn-primary btn-sm"><i
                                class="fa fa-plus-circle"></i>
                            Tambah Data</button>
                    </div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5">No</th>
                                <th>Nama Paket</th>
                                <th width="15%"><i class="fa fa-cog"></i></th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- end container -->

@includeIf('master_paket.form')
@endsection

@push('scripts')
<script>
    let table;

    $(function(){
        table = $('.table').DataTable({
            processing: true,
            autoWidth: false,
            ajax:{
                url:'{{ route('master.data') }}',
            },
            columns:[
                {data: 'DT_RowIndex', searchable:false, sortable:false},
                {data: 'nama_paket'},
                {data: 'aksi', searchable:false, sortable:false},
            ]
        });

        $('#modal-form').validator().on('submit', function(e){
                if (! e.preventDefault()){
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            alert('Tidak dapat menyimpan data');
                            return;
                        });
                }
            })
    });

    function addForm(url){
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Paket');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_paket]').focus();
    }

    function editForm(url){
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Paket');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_paket]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_paket]').val(response.nama_paket);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            })
    }

    function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih ?')) {
                $.post(url, {
                '_token': $('[name=csrf-token]').attr('content'),
                '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                })
            }
        }
</script>
@endpush
