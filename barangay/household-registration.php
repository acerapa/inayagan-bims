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
                                          <h5 class="m-b-10">Household Registration</h5>
                                          <p class="m-b-0 js-city-brgy-name-hjagxcvsfder">Barangay, City</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                              <div class="page-wrapper">
                                <div class="page-body">
                                  <div class="row">
                                    <div class="col-md-12 col-xl-6">
                                      <div class="card">
                                        <div class="card-header">
                                          <h5>Household Registration</h5>
                                          <span>Pease complete each required information</span>
                                        </div>
                                        <div class="card-block">
                                          <div>
                                            <div class="form-group row mt-4">
                                              <label class="col-sm-4 col-form-label">Household Name</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-lg js-jkbnzvxcdsfr" onkeyup="saveLocalHousehold()" >
                                                <label class="help">Example: Rosario, James & Jane</label>
                                              </div>
                                            </div>
                                            <div class="form-group row mt-4">
                                              <label class="col-sm-4 col-form-label">Ownership</label>
                                              <div class="col-sm-8">
                                                <select class="form-control form-control-lg js-bnxvzxnmsghas" onchange="saveLocalHousehold()">
                                                  <option value="0">Select</option>
                                                  <option value="OWN">Owned</option>
                                                  <option value="RNT">Renting</option>
                                                </select>
                                              </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group row mt-4">
                                              <label class="col-sm-4 col-form-label">City</label>
                                              <div class="col-sm-8">
                                                <select class="form-control form-control-lg js-kmvbxzvbxsde" onchange="saveLocalHousehold()">
                                                  <option value="0">Select City</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Barangay</label>
                                              <div class="col-sm-8">
                                                <select class="form-control form-control-lg js-jkagxcnmdfge" onchange="saveLocalHousehold()">
                                                  <option value="0">Select Barangay</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Sitio</label>
                                              <div class="col-sm-8">
                                                <select class="form-control form-control-lg js-jkavbcmzbgs5" onchange="saveLocalHousehold()">
                                                  <option value="0">Select Sitio</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Purok</label>
                                              <div class="col-sm-8">
                                                <select class="form-control form-control-lg js-hjasbnzxnhdfe4" onchange="saveLocalHousehold()">
                                                  <option value="0">Select Purok</option>
                                                </select>
                                              </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label"></label>
                                              <div class="col-sm-8">
                                                <button class="btn btn-primary w-100" onclick="showModalGeoPicker('.js-jknzxbbasdfwe', '.js-jkbncxujashd')">Open Geolocation Picker</button>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Latitude</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-lg bg-white js-jknzxbbasdfwe" onchange="saveLocalHousehold()" readonly>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Longitude</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-lg bg-white js-jkbncxujashd" onchange="saveLocalHousehold()" readonly>
                                              </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                              <button class="btn btn-primary js-hjgacvxfsder4">Register</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-0 col-xl-6">
                                      
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
    </div>
    
    <?php 

      include "c-footer-library.php";
      include "c-modal-geolocation-picker.php"; 

    ?>

    <script type="text/javascript" src="../assets/js-custom-brgy/household-registration.js"></script>
    
</body>

</html>
