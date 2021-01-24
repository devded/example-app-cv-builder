@include('head')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

            <li class="nav-item active">
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


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Bordered table</h4>
                        <p class="card-description"> Add class <code>.table-bordered</code>
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> First name </th>
                              <th> Progress </th>
                              <th> Amount </th>
                              <th> Deadline </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> 1 </td>
                              <td> Herman Beck </td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td> $ 77.99 </td>
                              <td> May 15, 2015 </td>
                            </tr>
                            <tr>
                              <td> 2 </td>
                              <td> Messsy Adam </td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td> $245.30 </td>
                              <td> July 1, 2015 </td>
                            </tr>
                            <tr>
                              <td> 3 </td>
                              <td> John Richards </td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td> $138.00 </td>
                              <td> Apr 12, 2015 </td>
                            </tr>
                            <tr>
                              <td> 4 </td>
                              <td> Peter Meggik </td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td> $ 77.99 </td>
                              <td> May 15, 2015 </td>
                            </tr>
                            <tr>
                              <td> 5 </td>
                              <td> Edward </td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td> $ 160.25 </td>
                              <td> May 03, 2015 </td>
                            </tr>
                            <tr>
                              <td> 6 </td>
                              <td> John Doe </td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td> $ 123.21 </td>
                              <td> April 05, 2015 </td>
                            </tr>
                            <tr>
                              <td> 7 </td>
                              <td> Henry Tom </td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td> $ 150.00 </td>
                              <td> June 16, 2015 </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>



            </div>


            <!-- content-wrapper ends -->



@include('footer')
