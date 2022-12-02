<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url()?>assets/img/favicon.png">
  <title>
    Dokumentasi ViGeNesia
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url()?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url()?>assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <!-- side bar -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="<?= base_url()?>assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">ViGeNesia</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('/Dokumentasi')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dokumentasi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('/Dokumentasi/auth')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">admin_panel_settings</i>
            </div>
            <span class="nav-link-text ms-1">Authorize</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('/Dokumentasi/motivasi')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">edit_note</i>
            </div>
            <span class="nav-link-text ms-1">Motivasi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="<?= base_url('/Dokumentasi/user')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">manage_accounts</i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('/Dokumentasi/key')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">key</i>
            </div>
            <span class="nav-link-text ms-1">V-Key</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://github.com/ryn-crypto/vigenesia-development" type="button" terget="_blank">Get Code</a>
      </div>
    </div>
  </aside>
  <!-- end sidebar -->
  
  <!-- menu utama -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb" class="d-flex align-items-baseline d-none d-lg-block">
          <h6 class="font-weight-bolder mb-0">URL : <?= base_url('/User')?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- main -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12 mb-xl-5 mb-4">
          <!-- card database -->
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">manage_accounts</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Dokuementasi Penggunaan</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-body">
              <!-- get all data -->
              <div class="row border border-2">
                <h6 class="mb-3 mt-2">Get all data user</h6>
                <div class="container col-md-10">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row">Url</th>
                        <td><?= base_url('/User')?></td>
                      </tr>
                      <tr>
                        <th scope="row">Method</th>
                        <td>GET</td>
                      </tr>
                      <tr>
                        <th scope="row">Header</th>
                        <td>Content-Type: application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">Response</th>
                        <td>
                          <img src="<?= base_url();?>/assets/img/dokumentasi/response_user.jpg" alt="" class="img-thumbnail rounded" width='400'>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- get all end -->
              <!-- get data by id -->
              <div class="row border border-2 mt-2">
                <h6 class="mb-3 mt-2">Get data user by id</h6>
                <div class="container col-md-10">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row">Url</th>
                        <td><?= base_url('/User')?></td>
                      </tr>
                      <tr>
                        <th scope="row">Method</th>
                        <td>GET</td>
                      </tr>
                      <tr>
                        <th scope="row">Header</th>
                        <td>Content-Type: application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">Body</th>
                        <td>iduser = "int"</td>
                      </tr>
                      <tr>
                      <th scope="row">Response</th>
                        <td>
                          <img src="<?= base_url();?>/assets/img/dokumentasi/response_user.jpg" alt="" class="img-thumbnail rounded" width='400'>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- get end -->
              <!-- put -->
              <div class="row border border-2 mt-2">
                <h6 class="mb-3 mt-2">Put data user</h6>
                <div class="container col-md-10">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row">Url</th>
                        <td><?= base_url('/User')?></td>
                      </tr>
                      <tr>
                        <th scope="row">Method</th>
                        <td>PUT</td>
                      </tr>
                      <tr>
                        <th scope="row">Header</th>
                        <td>Content-Type: application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">Body</th>
                        <td>iduser = 'int' <br> 
                            nama = 'string' <br>
                            profesi = 'string' <br>
                            email = 'string' <br>
                            password = 'anytype' <br>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Response</th>
                        <td><img src="<?= base_url();?>/assets/img/dokumentasi/response_user_put.jpg" alt="" class="img-thumbnail rounded" width='400'></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- put end -->
              <!-- delete -->
              <div class="row border border-2 mt-2">
                <h6 class="mb-3 mt-2">Put data user</h6>
                <div class="container col-md-10">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row">Endpoint</th>
                        <td>/Auth</td>
                      </tr>
                      <tr>
                        <th scope="row">Method</th>
                        <td>PUT</td>
                      </tr>
                      <tr>
                        <th scope="row">Header</th>
                        <td>Content-Type: application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">Body</th>
                        <td>Post tidak perlu/ gunakan param</td>
                      </tr>
                      <tr>
                        <th scope="row">Response</th>
                        <td>Larry the Bird</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- put end -->
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart text-danger"></i> by Squadra for a better API-Service.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Konfigurasi Tema</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Warna Sidebar</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Type Navigator</h6>
          <p class="text-sm">Pilih Salah Satu</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparant</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Hanya dapat mengubah navigasi type diversi desktop</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url()?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url()?>assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>