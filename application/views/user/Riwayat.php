<div class="container-fluid py-4">
  <div class="row text-center">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div class="col-6 d-flex">
            <h5 class="mb-0"><?php echo $judul; ?></h5>
          </div>
        </div>
        <hr>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No</td>
                  <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Donasi</td>
                  <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Tanggal</td>
                  <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Foto Bukti</td>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php $m = 0; ?>
                <?php foreach ($donasi as $es) :
                ?>
                  <?php $arr[$m] = [$es['nama']];
                  $m++; ?>
                <?php endforeach; ?>

                <?php foreach ($riwayat as $us) : ?>
                  <tr>
                    <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                      <h6 class="text-secondary"><?= $i; ?>.</h6>
                    </td>

                    <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                      <h6 class="text-secondary"><?= implode($arr[$i-1]) ?>.</h6>
                    </td>


                    <td class="text-center text-uppercase text-xxs font-weight-bolder">
                      <h6 class="text-secondary"><?= $us['tanggal']; ?></h6>
                    </td>
                    <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                      <img src="<?= base_url('assets/img/') . $us['gambar']; ?>" class="col-auto img-fluid border-radius-lg" style="height:auto">
                    </td>
                  </tr>
                  <?php $i++; ?>

                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>