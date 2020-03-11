<div class="table-responsive px-4 d-none"  id="seccond">
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
            @foreach ($class_2 as $seccond)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{ $seccond->user->name }}</td>
                    <td>{{ $seccond->siswa->name ?? ''}}</td>
                    <td>{{ $seccond->tanggal}}</td>
                    <td>{{ $seccond->jam_datang}}</td>
                    <td>{{ $seccond->jam_pulang}}</td>
                    <td><span class="badge badge-danger">{{ $seccond->status}}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive px-4 d-none"  id="third">
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
            @foreach ($class_3 as $third)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{ $third->user->name }}</td>
                    <td>{{ $third->siswa->name ?? ''}}</td>
                    <td>{{ $third->tanggal}}</td>
                    <td>{{ $third->jam_datang}}</td>
                    <td>{{ $third->jam_pulang}}</td>
                    <td><span class="badge badge-danger">{{ $third->status}}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
