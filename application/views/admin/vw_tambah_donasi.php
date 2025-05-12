<div class="container-fluid py-4">
    <div class="row text-center">
        <div class="d-flex flex-column">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h5><?php echo $judul; ?></h5>
                </div>
                <div class="card-body content-center" style="padding-left: 200px; padding-right: 200px;">
                    <div class="position-center card-body justify-content-center ">
                        <form role="form" action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nama" value="<?= set_value('nama'); ?>" name="nama" id="nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <textarea class="form-control mb-3" placeholder="Keterangan" name="keterangan" id="keterangan" rows="4" style="resize: vertical;"></textarea>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="yyyy-mm-dd (20xx-0x-0x)" value="<?= set_value('tanggal_batas'); ?>" name="tanggal_batas" id="tanggal_batas">
                                <small>kosongkan jika tidak ada tanggal batas</small>
                                <?= form_error('tanggal_batas', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" placeholder="Choose File" value="<?= set_value('gambar'); ?>" name="gambar" id="gambar">
                            </div>
                            <div class="text-center">
                                <a href="<?= base_url('Post/list') ?>" class="btn bg-gradient-danger w-20 my-4 mb-2">Batal</a>
                                <button type="submit" class="btn bg-gradient-primary w-20 my-4 mb-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
