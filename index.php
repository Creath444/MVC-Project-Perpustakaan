<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="public/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="public/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="public/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="public/assets/images/favicon.ico" />
</head>
<body>
  <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="#"><img src="public/assets/images/logo.svg" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="#"><img src="public/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <div class="search-field d-none d-md-block">
        <form class="d-flex align-items-center h-100" action="#">
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <i class="input-group-text border-0 mdi mdi-magnify"></i>
            </div>
            <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
          </div>
        </form>
      </div>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="public/assets/images/faces/face1.jpg" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">David Grey. H</span>
              <span class="text-secondary text-small">Project Manager</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Basic UI Elements</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="public/pages/ui-features/buttons.html">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="public/pages/ui-features/typography.html">Typography</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>



    <!-- HOME -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-home"></i>
            </span> Dashboard
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Updates</h4>
                <div class="d-flex">
                  <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                    <i class="mdi mdi-account-outline icon-sm me-2"></i>
                    <span>jack Menqu</span>
                  </div>
                  <div class="d-flex align-items-center text-muted font-weight-light">
                    <i class="mdi mdi-clock icon-sm me-2"></i>
                    <span>October 3rd, 2018</span>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6 pe-1">
                    <img src="public/assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                    <img src="public/assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
                  </div>
                  <div class="col-6 ps-1">
                    <img src="public/assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                    <img src="public/assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                  </div>
                </div>
                <div class="d-flex mt-5 align-items-top">
                  <img src="public/assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                  <div class="mb-0 flex-grow">
                    <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                    <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                  </div>
                  <div class="ms-auto">
                    <i class="mdi mdi-heart-outline text-muted"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
          <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
          <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- plugins:js -->
  <script src="public/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="public/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="public/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="public/assets/js/off-canvas.js"></script>
  <script src="public/assets/js/hoverable-collapse.js"></script>
  <script src="public/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="public/assets/js/dashboard.js"></script>
  <script src="public/assets/js/todolist.js"></script>
  <!-- End custom js for this page -->
</body>