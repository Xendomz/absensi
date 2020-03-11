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
                                <a  class="btn btn-success class1 text-white" data-toggle="tooltip" title="Kelas 1">
                                <i class="fa fa-dice-one"></i>
                                </a>
                                <a  class="btn btn-success class2 text-white" data-toggle="tooltip" title="Kelas 2">
                                    <i class="fa fa-dice-two"></i>
                                </a>
                                <a  class="btn btn-success class3 text-white" data-toggle="tooltip" title="Kelas 3">
                                    <i class="fa fa-dice-three"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive px-4"  id="first">
                        @include('utilities.message')
                        <table class="table table-striped table-bordered datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="text-center">{{ __('NO')}}</th>
                                    <th scope="col">{{ __('Nama Pengabsen') }}</th>
                                    <th scope="col">{{ __('Nama Siswa') }}</th>
                                    <th scope="col">{{ __('Tanggal') }}</th>
                                    <th scope="col">{{ __('Jam Datang') }}</th>
                                    <th scope="col">{{ __('Jam Pulang') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($class_1 as $first)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{ $first->user->name }}</td>
                                        <td>{{ $first->siswa->name ?? ''}}</td>
                                        <td>{{ $first->tanggal}}</td>
                                        <td>{{ $first->jam_datang}}</td>
                                        <td>{{ $first->jam_pulang}}</td>
                                        <td><span class="badge badge-danger">{{ $first->status}}</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @include('admin.absensi.data')
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection
@push('js')
@include('partial.datatable')
<script>
$(document).ready(function(){
    $(".class1").click(function(){
        $('#first').removeClass('d-none');
        $('#seccond').addClass('d-none');
        $('#third').addClass('d-none');
    });
    $(".class2").click(function(){
        $('#first').addClass('d-none');
        $('#seccond').removeClass('d-none');
        $('#third').addClass('d-none');
    });
    $(".class3").click(function(){
        $('#first').addClass('d-none');
        $('#seccond').addClass('d-none');
        $('#third').removeClass('d-none');
    });
});
</script>
@endpush
