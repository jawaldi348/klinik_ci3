<div class="row">
    <div class="col-xs-12">
        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        <?= $this->session->flashdata('pesan'); ?>
        <div class="table-header">
            <button class="btn btn-xs btn-success btntambah"><i class="ace-icon icon-plus3"></i> Tambah</button>
            <div class="widget-toolbar">List <?= $title ?></div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="data-tabel">
                <thead>
                    <tr>
                        <th class="text-center" width="40px">No</th>
                        <th>Kode</th>
                        <th>Nama Tindakan</th>
                        <th class="text-right">Harga (Rp)</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $d) { ?>
                        <tr>
                            <td class="text-center"><?= $no ?></td>
                            <td><?= $d['kd_tindakan'] ?></td>
                            <td><?= $d['nm_tindakan'] ?></td>
                            <td class="text-right"><?= rupiah($d['harga']) ?></td>
                            <td class="text-center" width="80px">
                                <div class="action-buttons">
                                    <a class="green" href="javascript:void(0)" onclick="edit('<?= $d['kd_tindakan'] ?>')">
                                        <i class="ace-icon icon-pencil7 bigger-130"></i>
                                    </a>
                                    <a class="red" href="javascript:void(0)" onclick="hapus('<?= $d['kd_tindakan'] ?>')">
                                        <i class="ace-icon icon-trash bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="viewmodal"></div>
<script>
    $(document).on('click', '.btntambah', function(e) {
        $.ajax({
            url: "<?= site_url('tindakan/create') ?>",
            success: function(resp) {
                $('#viewmodal').html(resp);
                $('#modal_create').modal('show');
            }
        });
    });

    function edit(kode, lang) {
        $.ajax({
            url: "<?= site_url('tindakan/edit') ?>",
            type: "POST",
            data: "&kode=" + kode,
            success: function(resp) {
                $("#viewmodal").html(resp);
                $("#modal_edit").modal('show');
            }
        });
    }

    function hapus(kode) {
        Swal.fire({
            title: "Anda yakin?",
            text: "Anda tidak akan dapat mengembalikan data ini!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya, hapus data ini"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?= site_url('tindakan/destroy') ?>",
                    data: "&kode=" + kode,
                    dataType: "json",
                    success: function(resp) {
                        if (resp.success) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: resp.success,
                                icon: 'success'
                            }).then((resp) => {
                                location.reload();
                            })
                        } else {
                            Swal.fire('Oops...', resp.error, 'error');
                        }
                    }
                });
            }
        })
    }
</script>