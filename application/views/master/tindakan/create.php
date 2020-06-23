<div id="modal_create" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Data</h4>
            </div>
            <?= form_open('tindakan/store', ['id' => 'form_create']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Kode</label>
                    <input type="text" name="kode" id="kode" class="form-control" placeholder="Kode" value="<?= $kode ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Tindakan</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Tindakan">
                </div>
                <div class="form-group">
                    <label class="control-label">Harga Paket (Rp)</label>
                    <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga Paket (Rp)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="store" class="btn btn-sm btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Please wait...">
                    <i class="ace-icon icon-floppy-disk"></i>
                    Simpan
                </button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
                    <i class="ace-icon icon-cross2"></i>
                    Batal
                </button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#form_create').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: $("#form_create").attr('action'),
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#store').button('loading');
                    setTimeout(function() {
                        $('#store').button('reset');
                    }, 500);
                },
                success: function(resp) {
                    if (resp.status == true) {
                        location.reload();
                    } else {
                        $.each(resp.pesan, function(key, value) {
                            var element = $('#' + key);
                            element.closest('div.form-group')
                                .removeClass('has-error')
                                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                                .find('.help-block')
                                .remove();
                            element.after(value);
                        });
                    }
                }
            })
        });
    });
</script>