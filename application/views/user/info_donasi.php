<div class="container-fluid py-4">
    <div class="row text-center">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="card">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php echo $this->session->flashdata('message'); ?>
                            </ul>
                        </div>
                        <!-- Card image -->
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <h5 class="mb-0"><?php echo $judul; ?></h5>
                            <br>
                            <img class="border-radius-lg w-40" src="<?php echo base_url('assets/img/') . $produk['gambar']; ?>" alt="Image placeholder">
                        </div>
                        <!-- Card body -->
                        <div class="card-body">

                            <div class="row">
                                <div class="card border-light mb-3" style="max-width: auto;">
                                    <div class="card-header">
                                        <h2><?php echo $produk['nama']; ?></h2>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-lg-start">
                                            <?php echo $produk['keterangan']; ?>
                                        </p>
                                        <h6 class="card-title">Dipost dari <?php echo $produk['tanggal_upload']; ?>
                                            <?php if ($produk['tanggal_batas'] != null) { ?>
                                                sampai tanggal <?php echo $produk['tanggal_batas']; ?>
                                            <?php } ?>
                                            <?php echo $this->session->flashdata('message'); ?>
                                        </h6>
                                    </div>
                                    <div class="card mx-auto" style="width: auto;">
                                        <div class="card-body">
                                            <p class="card-title fs-5 fst-italic">Upload bukti transfer</p>
                                            <form role="form" action="<?php echo base_url('User/kirim_bukti/' . $this->uri->segment(3)); ?>" method="POST" enctype="multipart/form-data">
                                                <div class="btn-group-sm" role="group" aria-label="bukti">
                                                    <div class="mb-3">
                                                        <input type="file" class="form-control" placeholder="Choose File" value="<?= set_value('gambar') ?>" name="gambar" id="gambar">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                    <?php echo form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>