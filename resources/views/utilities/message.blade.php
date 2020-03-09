@if ($message = session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-inner--text"><strong>Success!</strong> {{ $message }}</span>
  <button type="button" class="close px-2" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($message = session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-inner--text"><strong>Error!</strong> {{ $message }}</span>
  <button type="button" class="close px-2" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($message = session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
  <button type="button" class="close px-2" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($message = session('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-inner--text"><strong>Info!</strong> {{ $message }}</span>
  <button type="button" class="close px-2" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <span class="alert-text"><strong>Gagal!</strong> Mohon cek kembali inputan anda!</span>
  <button type="button" class="close px-2" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
