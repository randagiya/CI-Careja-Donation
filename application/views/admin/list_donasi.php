<div class="container-fluid py-0">
    <div class="row text-center">
        <div class="col-15">
            <div class="card mb-3 text-center">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <?= $this->session->flashdata('message'); ?>
                                        </ul>
                                    </div>
                                    <div class="card-header pt-0 p-3 text-center">
                                        <div class="col-6 d-flex">
                                            <h5 class="text-center mb-0"><?php echo $judul; ?></h5>
                                        </div>

                                    </div>

                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Search
                                    </button>
                                    <a type="button" class="btn btn-success" href="<?= base_url('Post/tambah') ?>">Tambah</a>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" href="<?= base_url('Post/list') ?>">Terbaru</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('Post/list_terlama') ?>">Terlama</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('Post/list_all') ?>">Semua Terbaru</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('Post/list_all_terlama') ?>">Semua Terlama</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group" role="group">
                                    <form class="d-flex" method="post" action="<?= base_url('Post/pencarian') ?>">
                                        <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
                                        <input class="btn btn-outline-success" type="submit" name="submit" value="Search"></input>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <?php foreach ($produk as $us) : ?>

                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="card border-info mb-3 text-start" style="width: auto;">
                                    <a href="javascript:;" class="d-block">
                                        <img src="<?= base_url('assets/img/') . $us['gambar']; ?>" class="col-auto img-fluid border-radius-lg" style="height:400px">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <div><?= $us['nama'] ?></div>
                                        </h5>
                                        <p class="card-text"><?= substr($us['keterangan'], 0, 1000); ?>
                                            <?php if (mb_strlen($us['keterangan']) >= 1000) { ?>
                                                .....
                                            <?php } ?></p>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a type="button" class="btn btn-success" href="<?= base_url('Post/edit/') . $us['id']; ?> ">Edit</a>
                                            <a type="button" class="btn btn-danger" href="<?= base_url('Post/hapus/') . $us['id']; ?> ">Hapus</a>
                                        </div>
                                        <p class="text-sm-end">Dipost tanggal: <?= $us['tanggal_upload'] ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach ?>
                        <!-- <div class="bd-example"></div>
                            <form action="< base_url('User/list'); ?>" method="post">
                                <input type="hidden" name="parameter1" value="< $page ?>">
                                <input class="btn btn-primary btn-sm" type="submit" value="<<">
                            </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>