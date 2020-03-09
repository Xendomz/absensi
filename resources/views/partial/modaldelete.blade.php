<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">
        <div class="modal-header bg-gradient-danger">
        <h4 class="modal-title" id="modal-title-notification">Konfirmasi Hapus Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
        <form class="form-delete" action="" method="POST" style="display: inline-   block;">
        <div class="modal-body">
        <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4">Peringatan !!!</h4>
            <p>Data yang dihapus tidak dapat dikembalikan.</p>
        </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-white">Ya, Hapus</button>
        </form>
        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Batal</button>
        </div>
    </div>
    </div>
</div>
