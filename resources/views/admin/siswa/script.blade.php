<script>
    const url  = '{{ route("admin.student.store") }}';

    $('.datepicker').datepicker({
                format: 'yy/mm/dd',
                autoclose: true,
                todayHighlight: true
    });

    $('#add').on('click', function(e) {
            e.preventDefault();
            $('#formModalEdit').modal('show');
        });
    $('.btn-edit').on('click', function(e) {
        e.preventDefault();
        const $row = $(this).closest('tr');
        const id = $(this).data('id');
        const name = $(this).data('name');
        const address = $(this).data('address');
        const birth = $(this).data('birth');
        const gender = $(this).data('gender');
        const kelas = $(this).data('kelas');
        const kelasId = $(this).data('kelasid');
        const major = $(this).data('major');
        const majorId = $(this).data('majorid');
        console.log(address);

        $('#formModal').modal('show');
        $('#formModal').find('form').attr('action', url +'/'+ id);
        $('input[name="_method"]').prop('disabled', false);
        $('#name').val(name);
        $('#lahir').val(birth);
        if (gender !== '') {
        $('#gender').val(gender).text(gender);
        } else {
        $('#gender').text('Pilih Jenis Kelamin Siswa');
        }
        if (kelasId !== '') {
        $('#class').val(kelasId).text(kelas);   
        } else {
        $('#class').text('Pilih Kelas Siswa');   
        }
        if (major !== '') {
        $('#major').val(majorId).text(major);
        } else {
        $('#major').text("Pilih Jurusan Siswa");
        }
        if (address !== '') {
        $('#address').val(address);
        } else {
            $('#address').val('');
        }
    });

    $('.btn-delete').on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('url');
        $('#modal-delete').modal('show');

        $('#modal-delete').find('form').attr('action', url);
        $('input[name="_method"]').prop('disabled', false);
    });

    $('.btn-show').on('click', function(e) {
            e.preventDefault();
            console.log("oke");
            $('#detailModal').modal('show');
            $('#modalContent').load($(this).attr('value'));
    });
</script>