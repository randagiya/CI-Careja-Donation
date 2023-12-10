
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?=base_url('assets/')?>img/pcr_logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>
    Careja
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?=base_url('assets/')?>css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?=base_url('assets/')?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?=base_url('assets/')?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?=base_url('assets/')?>css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
<?php date_default_timezone_set('Asia/Jakarta');?>
  <div class="min-height-300 bg-gradient-info position-absolute w-100"></div>
  <aside class="sidenav bg-default navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header ">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-10 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://pcr.ac.id/ " target="_blank">
        <img src="<?=base_url('assets/')?>img/pcr_logo.png" class="navbar-brand-img h-100 rounded-pill" alt="main_logo">
        <span class="ms-1 font-weight-bold"><strong>CAREJA</strong></span>
      </a>
    </div>
    <hr>
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

      <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Halaman') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-shop text-warning text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Halaman/list') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni ni-align-left-2 text-danger text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Donasi</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " target="_blank" href="https://www.instagram.com/bempcr/">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-mobile-button text-success text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Hubungi</span>
          </a>
        </li>
        
      </ul>
    </div>

</aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-start">
            
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
              
              <ul class="dropdown-menu  dropdown-menu-end  px-4 py-4 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo base_url('Auth/index'); ?>">
                    <div class="d-flex py-0">
                      <div class="my-auto">
                      <i class="ni ni-button-power fixed-plugin-button-nav cursor-pointer"></i>
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="text-dark font-weight-bold">Login</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            
              <ul class="dropdown-menu  dropdown-menu-end  px-4 py-4 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="#">
                    <div class="d-flex py-0">
                      <div class="my-auto">
                      <i class="ni ni-single-02 fixed-plugin-button-nav cursor-pointer"></i>
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="text-dark font-weight-bold">Profile</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="#">
                    <div class="d-flex py-0">
                      <div class="my-auto">
                      <i class="ni ni-button-power fixed-plugin-button-nav cursor-pointer"></i>
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="text-dark font-weight-bold">Log Out</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->