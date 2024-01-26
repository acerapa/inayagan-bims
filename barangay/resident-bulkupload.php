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
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Resident Bulk Upload</h5>
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
                                <div class="card table-card">
                                    <div class="flex items-center">
                                        <div class="p-3 grid">
                                            <label for="">Choose file to upload (csv only)</label>
                                            <input type="file" id="resident-bulk-upload">
                                        </div>
                                        <div>
                                            <button class="btn btn-primary ml-2 opacity-50 pointer-events-none" id="upload-residents">Upload Residents</button>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="p-3">
                                            <h6 id="rows-to-upload">Rows: 0</h6>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="to-be-upload-residents">
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