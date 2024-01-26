<?php include "c-meta.php"; ?>
<body>

  <?php include "c-theme-loader.php"; ?>

  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <?php include "c-header.php"; ?>
          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
              
                  <?php 
                    include "c-sidebar.php";
                    include "c-modal-add-sitio.php";
                  ?>

                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                        <h5 class="m-b-10">Manage Sitio</h5>
                                        <p class="m-b-0 js-city-brgy-name-hjagxcvsfder">Barangay, City</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <button class="btn btn-primary" onclick="showAddSitio()">Add Sitio</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pcoded-inner-content">
                          <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                  <div class="row">
                                    <div class="col-sm-12 col-lg-10 col-xl-8">
                                      <div class="card table-card">
                                        <div class="card-header">
                                          <h5>Masterlist</h5>
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
                                            <table class="table table-hover js-hjgvfcdsews">
                                              <thead>
                                                <tr>
                                                  <th>No.</th>
                                                  <th>Reference No.</th>
                                                  <th>Name</th>
                                                  <th>Reg. Date</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-0 col-lg-2 col-xl-4">
                                    <!-- Right content -->
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
    <script type="text/javascript" src="../assets/js-custom-brgy/barangay-sitio.js"></script>
</body>

</html>
