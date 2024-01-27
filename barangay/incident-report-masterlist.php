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
                                        <h5 class="m-b-10">Incident Report Masterlist</h5>
                                        <p class="m-b-0 js-city-brgy-name-hjagxcvsfder">Barangay, City</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="card table-card">
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
                                    </div>
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "c-footer-library.php"; ?>
    <script>
        $(document).ready(function () {
            $.get(gv.api + "cims/all_reports", function (response) {
                console.log(response);
            });
        });
    </script>
</body>

</html>
