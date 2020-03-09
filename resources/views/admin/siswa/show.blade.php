<table class="table table-striped">
<tr>
    <th>Nama</th>
    <td>:</td>
    <td>{{$siswa->name}}</td>
</tr>
<tr>
    <th>Alamat</th>
    <td>:</td>
    <td>{{$siswa->alamat}}</td>
</tr>
<tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>{{$siswa->tanggal_lahir}}</td>
</tr>
<tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>{{$siswa->jenkel}}</td>
</tr>
<tr>
    <th>Kelas</th>
    <td>:</td>
    <td>{{$siswa->class->name ?? ''}}</td>
</tr>
<tr>
    <th>Jurusan</th>
    <td>:</td>
    <td>{{$siswa->jurusan->name ?? ''}}</td>
</tr>
</table>
