<footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
          <div class="row justify-content-center">
              <div class="col-12">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <h5>Careja</h5>
                        <p class="mt-3">Menerima Donasi<br>Careja adalah website donasi <br>berlokasi di Pekanbaru, Riau</p>
                        <i class='bx bxl-facebook-square'></i>
                        <i class='bx bxl-instagram-alt' ></i>
                      </div>
                      
                      <div class="col-12 col-lg-3">
                      
                        <ul class="list-unstyled">
                       
                        </ul>
                      </div>

                      <div class="col-12 col-lg-3">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled">
                          <li>Pekanbaru, Riau</li>
                          <li>Indonesia</li>
                          <li>+62 899-9999-999</li>
                          <li>Email: emailcontoh@email </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row border-top justify-content-center align-items-center pt-4 ">
            <div class="col-auto text-gray-500 font-weight-light">
                2023 Copyright Politeknik Caltex Riau • All rights reserved 
            </div>
          </div>
        </div>
    </footer>
  <!--   Core JS Files   -->
  <script src="<?=base_url('assets/')?>js/core/popper.min.js"></script>
  <script src="<?=base_url('assets/')?>js/core/bootstrap.min.js"></script>
  <script src="<?=base_url('assets/')?>js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?=base_url('assets/')?>js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-uNQWM9GOKRWLHq/dZzi3IyT9Cw8KB+kfy3YecNWg0gEXFO9DkMyojy9ZtqB3ua3z" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-1ejXw8yI5NSaR3ZCxz8O7nA2C12tB1T7MgOdCmbnlZu2m1DOLrx7cK3YoM7prQTx"
    crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/') ?>js/argon-dashboard.min.js?v=2.0.4"></script>


  <!-- <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script> -->
  <!-- Github buttons -->
  <script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/')?>js/sb-admin-2.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function(){
            let fileName = $($this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        $(document).ready(function(){
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();

                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                if (paseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                    alert('stok tidak tersedia! stok tersedia! : ' + parseInt($('input[name="stok"]').val()))
                    reset()
                }
            });

            function reset() {
                $('input[name="jumlah"]').val('')
                $('input[name="total"]').val('')
            }
        })
    </script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url('assets/')?>js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>