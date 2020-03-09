@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Siswa') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-success" id="add" data-toggle="tooltip" title="Tambah Data">
                                <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive px-4">
                        @include('utilities.message')
                        <table id="example" class="table table-striped table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('NO')}}</th>
                                    <th scope="col">{{ __('Nama') }}</th>
                                    <th scope="col">{{ __('Alamat') }}</th>
                                    <th scope="col">{{ __('Tanggal Lahir') }}</th>
                                    <th scope="col">{{ __('Jenis Kelamin') }}</th>
                                    <th scope="col">{{ __('Kelas') }}</th>
                                    <th scope="col">{{ __('jurusan') }}</th>
                                    <th scope="col">{{ __('Aksi')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->alamat }}</td>
                                        <td>{{ $siswa->tanggal_lahir}}</td>
                                        <td>{{ $siswa->jenkel}}</td>
                                        <td>{{ $siswa->class->name ?? ''}}</td>
                                        <td>{{ $siswa->jurusan->name ?? ''}}</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary mr-1 btn-edit" data-toggle="tooltip" title="Ubah data">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger btn-delete" data-id="{{ $siswa->id }}" data-url="#" data-toggle="tooltip" title="Hapus data">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            @include('admin.siswa.modal')
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            'pagingType' : 'numbers'
        });
    });
    $('#add').on('click', function(e) {
        e.preventDefault();
        $('#formModal').modal('show');
    });
    $('.btn-edit').on('click', function(e) {
        e.preventDefault();
        const $row = $(this).closest('tr');
        const id = $(this).data('id');

        $('#formModal').modal('show');
        $('#formModal').find('form').attr('action', url +'/'+ id);
        $('input[name="_method"]').prop('disabled', false);
        $('#name').val(
            $row.find('td').eq(1).text()
        );
    });
</script>
@endpush
