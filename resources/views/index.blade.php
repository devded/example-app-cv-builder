<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin-template/assets/vendors/mdi/css/materialdesignicons.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('admin-template/assets/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('admin-template/assets/vendors/css/vendor.bundle.base.css') }} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin-template/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-template/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin-template/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin-template/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="flex-row p-0 navbar default-layout-navbar col-lg-12 col-12 fixed-top d-flex">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('admin-template/assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('admin-template/assets/images/faces/face28.png') }}" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                </div>
              </a>
              <div class="p-0 border-0 dropdown-menu navbar-dropdown dropdown-menu-right font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="pl-2 dropdown-header text-uppercase text-dark">User Options</h5>
                  <a class="py-1 dropdown-item d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                      <span class="badge badge-primary">3</span>
                      <i class="ml-1 mdi mdi-email-open-outline"></i>
                    </span>
                  </a>
                  <a class="py-1 dropdown-item d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="ml-1 mdi mdi-account-outline"></i>
                    </span>
                  </a>
                  <a class="py-1 dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="pl-2 mt-2 dropdown-header text-uppercase text-dark">Actions</h5>
                  <a class="py-1 dropdown-item d-flex align-items-center justify-content-between" href="#">
                    <span>Lock Account</span>
                    <i class="ml-1 mdi mdi-lock"></i>
                  </a>
                  <a class="py-1 dropdown-item d-flex align-items-center justify-content-between" href="{{ url('logout') }}">
                    <span>Log Out</span>
                    <i class="ml-1 mdi mdi-logout"></i>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 py-4 mb-0 text-white bg-primary">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-1 preview-subject ellipsis font-weight-normal">Mark send you a message</h6>
                    <p class="mb-0 text-gray"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-1 preview-subject ellipsis font-weight-normal">Cregh send you a message</h6>
                    <p class="mb-0 text-gray"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-1 preview-subject ellipsis font-weight-normal">Profile picture updated</h6>
                    <p class="mb-0 text-gray"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 py-4 mb-0 text-white bg-primary">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-1 preview-subject font-weight-normal">Event today</h6>
                    <p class="mb-0 text-gray ellipsis"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-1 preview-subject font-weight-normal">Settings</h6>
                    <p class="mb-0 text-gray ellipsis"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-1 preview-subject font-weight-normal">Launch Admin</h6>
                    <p class="mb-0 text-gray ellipsis"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="mdi mdi-view-headline menu-icon"></i></span>
                <span class="menu-title">Summary</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="icon-bg"><i class="mdi mdi-school menu-icon"></i></span>
                <span class="menu-title">Education</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="icon-bg"><i class="mdi mdi-briefcase menu-icon"></i></span>
                <span class="menu-title">Experience</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Key Skills</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                  <span class="icon-bg"><i class="mdi mdi-certificate menu-icon"></i></span>
                  <span class="menu-title">Tranning</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                  <span class="icon-bg"><i class="mdi mdi-trophy menu-icon"></i></span>
                  <span class="menu-title">Achivement</span>
                </a>
            </li>







            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="{{ route('logout') }}" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span>
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
              <div class="footer-inner-wraper">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-center text-muted d-block text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                  <span class="float-none mt-1 text-center float-sm-right d-block mt-sm-0"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                </div>
              </div>
            </footer>
            <!-- partial -->
          </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin-template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin-template/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin-template/assets/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin-template/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin-template/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin-template/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin-template/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
