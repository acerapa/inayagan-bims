<?php include "c-meta.php"; ?>
<body>

  <?php include "c-theme-loader.php"; ?>

  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <?php include "c-header.php"; ?>
          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
              
                  <?php include "c-sidebar.php"; ?>

                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                       <div class="page-header-title">
                                          <h5 class="m-b-10">Household Masterlist</h5>
                                          <p class="m-b-0 js-city-brgy-name-hjagxcvsfder">Barangay, City</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <a href="household-registration.php" class="btn btn-primary">New Household</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                              <div class="card table-card">
                                <div class="card-header">
                                  <h5>Projects</h5>
                                  <div class="card-header-right">
                                      <ul class="list-unstyled card-option">
                                          <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                          <li><i class="fa fa-window-maximize full-card"></i></li>
                                          <li><i class="fa fa-minus minimize-card"></i></li>
                                          <li><i class="fa fa-refresh reload-card"></i></li>
                                          <li><i class="fa fa-trash close-card"></i></li>
                                      </ul>
                                  </div>
                                </div>
                                <div class="card-block">
                                  <div class="table-responsive">
                                    <table class="table table-hover js-hjgva8iasdhjd">
                                      <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Reference No</th>
                                          <th>Household</th>
                                          <th>Ownership</th>
                                          <th>Sitio</th>
                                          <th>Purok</th>
                                          <th>Latitude</th>
                                          <th>Longitude</th>
                                          <th>Reg. Date</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <!-- Append rows -->
                                      </tbody>
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
    
    <?php include "c-footer-library.php"; ?>
    <script type="text/javascript" src="../assets/js-custom/household-masterlist.js"></script>
</body>

</html>
