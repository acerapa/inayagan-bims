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
                                        <h5 class="m-b-10">Barangay Clearance</h5>
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
                                                        <h5>Barangay Certificate</h5>
                                                        <span>Input <code>NA</code> if not applicable</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <h5 class="text-center mt-4">Republic of the Philippines</h5>
                                                        <h5 class="text-center">Province of <span class="js-nmxaxnsdjfgr"></span> </h5>
                                                        <h6 class="text-center"><span class="js-jkaxndtq1zma"></span> </h6>
                                                        <h6 class="text-center">Barangay <span class="js-hbzxcvdfgftre"></span> </h6>

                                                        <h5 class="text-center mt-10">OFFICE OF PUNONG BARANGAY</h5>
                                                        <h5 class="text-center mt-10">BARANGAY CLEARANCE</h5>

                                                        <h6 class="mt-10 px-20">TO WHOM IT MAY CONCERN:</h6>
                                                        
                                                        <p class="mt-4 px-20 text-sm indent-10 text-justify">
                                                            This is to certify that MAURICE S. NADER, Filipino ,59 years of Age, born on Jul. 17, 1977, migrated and resides at Brgy. San Juan, Palompon, Leyte, Philippines, is personally known to me to be of good moral character and law abiding citizen in the community where she resides.
                                                        </p>
                                                        
                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            She has never been convicted of any criminal offense involving moral turpitude cases.
                                                        </p>

                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            That as per record/ file in our barangay no name or person of MAURICE S. NADER has been appeared or recorded.
                                                        </p>

                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            This certification is issued upon the request of MAURICE S. NADER for whatever legal purpose this may serve.
                                                        </p>

                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            ISSUED on this 26th day of January, 2024 at Brgy. Inayagan, Naga, Cebu.
                                                        </p>

                                                        <div class="mt-3 flex px-20 gap-10 mb-20">
                                                            <div>
                                                                <b class="text-sm">
                                                                    <u>MAURICE S. NADER</u>
                                                                </b>
                                                                <p class="text-sm m-0">Affiant</p>
                                                                <p class="text-sm m-0">Issued on: 01/20/2024</p>
                                                                <p class="text-sm m-0">Issued at: Inayagan, Naga</p>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p class="text-sm m-0">Prepared by:</p>
                                                                    <p class="indent-10 text-sm m-0"></p>
                                                                    <p class="indent-10 text-sm m-0">Brgy. Secretary</p>
                                                                </div>
                                                                <div>
                                                                    <p class="text-sm m-0">Prepared by:</p>
                                                                    <p class="indent-10 text-sm m-0"></p>
                                                                    <p class="indent-10 text-sm m-0">Brgy. Captain</p>
                                                                </div>
                                                            </div>
                                                        </div>
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
        $(document).ready(() => {
            $(".js-nmxaxnsdjfgr").text("Cebu");
            $(".js-jkaxndtq1zma").text("City of Talisay");
            $(".js-hbzxcvdfgftre").text( getUserBrgyInfo()['brgy_name']);
        })
    </script>
</body>

</html>
