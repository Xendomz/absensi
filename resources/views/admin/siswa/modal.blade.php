 <!-- Modal -->
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('admin.student.store') }}" autocomplete="off">
                @csrf
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">{{ __('Nama') }}</label>
                        <input type="text" name="name" id="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Tanggal Lahir') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control datepicker" id="lahir" name="tanggal_lahir" placeholder="Select date" type="text" value="{{date('Y-m-d')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group{{ $errors->has('jenkel') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Jenis Kelamin') }}</label>
                                <select name="jenkel" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @if ($errors->has('jenkel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jenkel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group{{ $errors->has('class_id') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Kelas') }}</label>
                                <select name="class_id" id="" class="form-control">
                                    @foreach ($kelas as $k)
                                    <option value="{{$k->id}}">{{$k->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('class_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('class_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group{{ $errors->has('jurusan_id') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Jurusan') }}</label>
                                <select name="jurusan_id" id="" class="form-control">
                                    @foreach ($jurusan as $j)
                                    <option value="{{$j->id}}">{{$j->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('jurusan_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jurusan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-password">{{ __('alamat') }}</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="3"></textarea>
                        @if ($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">batal</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
