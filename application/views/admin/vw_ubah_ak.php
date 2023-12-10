<div class="container-fluid py-4">
    <div class="row text-center">
        <div class="d-flex flex-column">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="card-body content-center" style="padding-left: 200px; padding-right: 200px;">
                        <div class="position-center card-body justify-content-center ">
                            <div class="btn-group" role="group">
                                <div class="card border-info mb-3 text-start" style="width: auto;">
                                    <div class="card-body">
                                        <form class="d-flex" method="post" action="<?= base_url('Post/cari_ak') ?>">
                                            <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
                                            <input class="btn btn-outline-success" type="submit" name="submit" value="Search"></input>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <?php $i = 1; ?>
                                            <?php foreach ($akun as $us) : ?>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row"><?= $i ?></td>
                                                        <td><?= $us['email'] ?></td>
                                                        <td><?= $us['role'] ?></td>
                                                        <td>
                                                            <?php
                                                            if ($us['id'] != 1) {
                                                                if ($us['role'] == 'User') { ?>
                                                                    <a type="button" class="btn btn-success" href="<?= base_url('Post/ak_ad/') . $us['id']; ?> ">Admin</a>
                                                                <?php } else if ($us['role'] == 'Admin') { ?>
                                                                    <a type="button" class="btn btn-danger" href="<?= base_url('Post/ak_us/') . $us['id']; ?> ">User</a>
                                                            <?php }
                                                            } ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php $i++;
                                            endforeach ?>
                                        </table>
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