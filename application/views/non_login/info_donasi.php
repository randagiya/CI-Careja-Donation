<div class="container-fluid py-4">
    <div class="row text-center">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="card">
                        <!-- Card image -->
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <h5 class="mb-0"><?php echo $judul; ?></h5>
                            <br>
                            <img class="border-radius-lg w-40" src="<?= base_url('assets/img/') . $produk['gambar']; ?>" alt="Image placeholder">
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form action="" method="POST" class="">
                                <div class="row">
                                    <div class="card border-light mb-3" style="max-width: auto;">
                                        <div class="card-header">
                                            <h2><?= $produk['nama']; ?></h2>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-lg-start">
                                                <?= $produk['keterangan']; ?>
                                            </p>
                                            <h6 class="card-title">dipost dari <?= $produk['tanggal_upload']; ?>
                                                <?php if ($produk['tanggal_batas'] != null) { ?>
                                                    sampai tanggal <?= $produk['tanggal_batas']; ?>
                                                <?php } else { ?>
                                            </h6>
                                        <?php } ?>
                                        </div>
                                        <div class="align-items-center">
                                            <a class="btn btn-icon btn-2 btn-info" href="<?= base_url('Auth')?>" type="button">
                                                <span class="btn-inner--icon"><i class="ni ni-zoom-split-in"></i></span>
                                                Uplolad Bukti Transfer
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>