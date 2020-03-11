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
                        <table class="table table-striped table-bordered datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="text-center">{{ __('NO')}}</th>
                                    <th scope="col">{{ __('Nama') }}</th>
                                    <th scope="col">{{ __('Kelas') }}</th>
                                    <th scope="col">{{ __('jurusan') }}</th>
                                    <th scope="col" class="text-center">{{ __('Aksi')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->class->name ?? ''}}</td>
                                        <td>{{ $siswa->jurusan->name ?? ''}}</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info btn-show" href="#" value="{{route('admin.student.show',$siswa->id)}}" data-id="#" data-toggle="tooltip" title="Detail Siswa">
                                                <i class="fa fa-info"></i>
                                            <a href="#" class="btn btn-sm btn-primary mr-1 btn-edit" data-id="{{$siswa->id}}" data-name="{{$siswa->name}}" data-address="{{$siswa->alamat}}" data-birth="{{$siswa->tanggal_lahir}}" data-gender="{{$siswa->jenkel}}" data-kelas="{{$siswa->class->name ?? ''}}" data-kelasid="{{$siswa->class_id}}" data-major="{{$siswa->jurusan->name ?? ''}}" data-majorid="{{$siswa->jurusan_id}}" data-toggle="tooltip" title="Ubah data">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-danger btn-delete" data-id="{{ $siswa->id }}" data-url="{{route('admin.student.destroy', $siswa->id)}}" data-toggle="tooltip" title="Hapus data">
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

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
    @include('admin.siswa.modal')
    @include('admin.siswa.modaledit')
    @include('admin.siswa.detail')
    @include('partial.modaldelete')
@endsection
@push('js')
@include('admin.siswa.script')
@include('partial.datatable')
@endpush
