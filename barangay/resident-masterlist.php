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
                                          <h5 class="m-b-10">Resident Masterlist</h5>
                                          <p class="m-b-0 js-city-brgy-name-hjagxcvsfder">Barangay, City</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <button class="btn btn-primary">Outsider</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                              <div class="card table-card">
                                <div class="card-header">
                                  <div class="col-sm-12 col-md-8 col-xl-8 row">
                                    <input type="text" class="col-4 form-control js-gxcva7yszxcn" name="" placeholder="First name">
                                    <input type="text" class="col-4 form-control js-mkxcbnzxvbdf ml-2" name="" placeholder="Surname">
                                    <button class="btn btn-primary js-hjaxcnmvbzse ml-2">Search</button>
                                  </div>
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
                                    <table class="table table-hover js-jkhy4azxmf9g">
                                      <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Surname</th>
                                          <th>Given name</th>
                                          <th>Middle name</th>
                                          <th>Birthday</th>
                                          <th>Mobile</th>
                                          <th>Email</th>
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
    <script type="text/javascript" src="../assets/js-custom-brgy/resident-masterlist.js"></script>

</body>

</html>
