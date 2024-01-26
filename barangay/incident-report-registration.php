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
                    include "c-modal-geolocation-picker.php";

                  ?>

                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                        <h5 class="m-b-10">Incident Report Registration</h5>
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
                                    <div class="col-sm-12 col-md-12 col-xl-8">
                                      <div class="card">
                                        <div class="card-header">
                                          <h5>Incident Report Registration</h5>
                                          <span>Input <code>NA</code> if not applicable</span>
                                        </div>
                                        <div class="card-block">
                                          <h5 class="text-center mt-4">Republic of the Philippines</h5>
                                          <h5 class="text-center">Province of <span class="js-nmxaxnsdjfgr"></span> </h5>
                                          <h6 class="text-center"><span class="js-jkaxndtq1zma"></span> </h6>
                                          <h6 class="text-center">Barangay <span class="js-hbzxcvdfgftre"></span> </h6>
                                          <p class="text-center mt-3">Reference No.:  <span class="js-jkas7yasgcvz">000-000000000-00</span> </p>
                                        
                                          <div class="form-group row mt-4">
                                            <label class="col-12 col-form-label">Type of Incident</label>
                                            <div class="col-sm-7 col-md-7 col-xl-10">
                                              <select class="form-control form-control-lg js-jkazxbndfghr">
                                                <option value="0">Select Type</option>
                                              </select>
                                            </div>
                                            <div class="col-sm-1 col-md-1 col-xl-1"></div>
                                            <div class="col-sm-3 col-md-3 col-xl-1 d-flex justify-content-end">
                                              <button class="btn btn-primary js-klzxnmdfge3w">Add Option</button>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-6 mt-4">
                                              <label class="col-form-label">Inclusive Date of Incident</label>
                                              <div class="">
                                                <input type="date" class="form-control form-control-lg js-hjafcxdfsrde" name="">
                                              </div>
                                            </div>
                                            <div class="form-group col-6 mt-4">
                                              <label class="col-form-label">Time of Incident</label>
                                              <div>
                                                <input type="time" class="form-control form-control-lg js-nmzw39pfzw7f" name="">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row mt-5">
                                            <label class="col-10 col-form-label"><strong>Exact Location of Incident </strong> (road, zone, barangay, etc..)</label>
                                            <div class="col-12 mt-2">
                                              <textarea class="form-control form-control-lg js-kla490cgdsew"></textarea>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <div class="col-2">
                                              <button class="btn btn-primary" onclick="showModalGeoPicker('.js-jkagxzb9akme', '.js-mzxndgw38xsf')">Geolocation</button>
                                            </div>
                                            <div class="col-5">
                                              <input type="text" class="form-control form-control-lg bg-white js-jkagxzb9akme" placeholder="Latitude" name="" readonly>
                                            </div>
                                            <div class="col-5">
                                              <input type="text" class="form-control form-control-lg bg-white js-mzxndgw38xsf" placeholder="Longitude" name="" readonly>
                                            </div>
                                          </div>
                                          <div class="form-group row mt-5">
                                            <label class="col-12 col-form-label"><strong>Involved Person/Specific Identification</strong> (Name, Age, Gender, Address, Position/Designation)</label>
                                            <div class="col-12">
                                              <textarea class="form-control form-control-lg"></textarea>
                                            </div>
                                          </div>
                                          <div class="form-group row mt-5">
                                            <label class="col-12 col-form-label"><strong>Narrative Details of Incident</strong> (description how the incident happened, others)</label>
                                            <div class="col-12">
                                              <textarea class="form-control form-control-lg js-jafgxdfrse34"></textarea>
                                            </div>
                                          </div>
                                          <div class="form-group row mt-5">
                                            <label class="col-12 col-form-label"><strong>Action Taken</strong> (Narrative response/decision implemented by the authorities)</label>
                                            <div class="col-12">
                                              <textarea class="form-control form-control-lg js-ud29zasjkfgr"></textarea>
                                            </div>
                                          </div>
                                          <div class="form-group row mt-5">
                                            <label class="col-12 col-form-label"><strong>Recommendation</strong> (suggestion of the higher authorities/government agencies to be implemented)</label>
                                            <div class="col-12">
                                              <textarea class="form-control form-control-lg js-jkaxnmfghder"></textarea>
                                            </div>
                                          </div>
                                          <div class="p-3"></div>
                                          <hr/>
                                          <div class="row">
                                            <div class="form-group row col-6 mt-4">
                                              <label class="col-12 col-form-label">Date Prepared</label>
                                              <div class="col-12">
                                                <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control form-control-lg js-ko56sdfgder4" name="">
                                              </div>
                                            </div>
                                            <div class="form-group row col-6 mt-4">
                                              <label class="col-12 col-form-label">Prepared By</label>
                                              <div class="col-12">
                                                <input type="text" class="form-control form-control-lg js-klayudrtefger" name="">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group row col-6 mt-4">
                                              <div class="col-12">
                                                <button class="btn btn-outline-primary w-100">Clear Form</button>
                                              </div>
                                            </div>
                                            <div class="form-group row col-6 mt-4">
                                              <div class="col-12">
                                                <button class="btn btn-primary w-100 js-jkatrsdfgder">Submit Incident Report</button>
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
                </div>
            </div>
        </div>
    </div>
    
    <?php include "c-footer-library.php"; ?>
    <script type="text/javascript" src="../assets/js-custom-brgy/incident-report-registration.js"></script>
    <script type="text/javascript">
      $(".js-klzxnmdfge3w").click(function () {
  Plugin_ui.addRecordModalSingleColumn("New Incident Type", "Provide option that currently doesn't exist from the list.", function () { showLoading() }, function () { hideLoading(); }, function (response) {
    console.log(response);
  });
});
    </script>
</body>

</html>
