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
                                          <h5 class="m-b-10">Resident Registration</h5>
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
                                        <div class="col-md-6">
                                          <div class="card">
                                            <div class="card-header">
                                              <h5>Basic Information</h5>
                                              <span>Input <code>NA</code> if not applicable</span>
                                            </div>
                                            <div class="card-block">
                                              <form class="js-user-basic-hjgtrfsdrwen" action="" method="post">
                                                <div class="form-group row mt-4">
                                                  <label class="col-sm-4 col-form-label">First name</label>
                                                  <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-lg inp-firstname" onkeyup="saveLocal()" name="firstname">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Last name</label>
                                                  <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-lg inp-lastname" onkeyup="saveLocal()" name="lastname">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Middle name</label>
                                                  <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-lg inp-middlename" onkeyup="saveLocal()" name="middlename">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Gender</label>
                                                  <div class="col-sm-8">
                                                    <select class="form-control form-control-lg js-jhytfdresdgh inp-gender" onchange="saveLocal()">
                                                      <option value="0">Select Gender</option>
                                                      <option value="ML">Male</option>
                                                      <option value="FM">Female</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Birthday</label>
                                                  <div class="col-sm-8">
                                                    <input type="date" class="form-control form-control-lg inp-birthday" onkeyup="saveLocal()" name="birthday">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Mobile No.</label>
                                                  <div class="col-sm-8">
                                                    <input type="text" value="639" class="form-control form-control-lg inp-mobile" onkeyup="saveLocal()" name="mobile">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Email</label>
                                                  <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-lg inp-email" onkeyup="saveLocal()" name="email">
                                                  </div>
                                                </div>
                                              </form>
                                            </div>
                                            <div class="card-header">
                                              <h5>Location</h5>
                                              <span>Input <code>NA</code> if not applicable</span>
                                            </div>
                                            <div class="card-block">
                                              <form class="js-user-location-jkhufcxdasew">
                                                <div class="form-group row mt-4">
                                                  <label class="col-sm-4 col-form-label">City</label>
                                                  <div class="col-sm-8">
                                                    <select class="form-control form-control-lg js-jkhytrsdfde4 inp-city_code" onchange="saveLocal()">
                                                      <option value="0">Select City</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Barangay</label>
                                                  <div class="col-sm-8">
                                                    <select class="form-control form-control-lg js-jkatycmcxazu inp-brgy_code" onchange="saveLocal()">
                                                      <option value="0">Select Barangay</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Sitio</label>
                                                  <div class="col-sm-8">
                                                    <select class="form-control form-control-lg js-klavbxnmcbsd inp-sitio_refid" onchange="saveLocal()">
                                                      <option value="0">Select Sitio</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Purok</label>
                                                  <div class="col-sm-8">
                                                    <select class="form-control form-control-lg js-nmaxbndgher4 inp-purok_refid" onchange="saveLocal()">
                                                      <option value="0">Select Purok</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Household</label>
                                                  <div class="col-sm-8">
                                                    <select class="form-control form-control-lg js-njafvxbnsde3 inp-household_refid" onchange="saveLocal()">
                                                      <option value="0">Select Household</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </form>
                                            </div>


                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="card">
                                            <div class="card-header">
                                              <h5>Profile Picture</h5>
                                              <span>Take photo or upload from device</span>
                                            </div>
                                            <div class="card-block">
                                              <form>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-end">
                                        <button class="btn btn-outline-primary">Clear</button>
                                        <div class="p-2"></div>
                                        <button class="btn btn-primary js-hjgytrfdesw3">Register</button>
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
    <script type="text/javascript" src="../assets/js-custom/resident-registration.js"></script>
</body>

</html>
