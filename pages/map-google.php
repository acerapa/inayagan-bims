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
                                            <h5 class="m-b-10">Google Map</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Maps</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Google Maps</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                        <!-- Page body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <!-- Basic map start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Basic</h5>
                                            <span>Map shows places around the world</span>
                                        </div>
                                        <div class="card-block">
                                            <div id="basic-map" class="set-map"></div>
                                        </div>
                                    </div>
                                    <!-- Basic map end -->
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <!-- Markers map start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Markers</h5>
                                            <span>Maps shows <code>location</code> of the place</span>
                                        </div>
                                        <div class="card-block">
                                            <div id="markers-map" class="set-map"></div>
                                        </div>
                                    </div>
                                    <!-- Markers map end -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <!-- Overlay map start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Overlay</h5>
                                            <span>Map shows places around the world</span>
                                        </div>
                                        <div class="card-block">
                                            <div id="mapOverlay" class="set-map"></div>
                                        </div>
                                    </div>
                                    <!-- Overlay map start -->
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <!-- Geo-Coding map start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Geo-Coding</h5>
                                            <span>Search your location</span>
                                        </div>
                                        <div class="card-block">
                                            <div class="right-icon-control">
                                                <form method="post" id="geocoding_form" class="form-material">
                                                    <div class="form-group form-primary">
                                                        <input type="text" id="address" name="footer-email" class="form-control" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Write your place</label>
                                                    </div>
                                                    <div class="form-icon ">
                                                        <button class="btn btn-primary btn-icon  waves-effect waves-light">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                         <div id="mapGeo" class="set-map"></div>
                                     </div>
                                 </div>
                                 <!-- Geo-Coding map end -->
                             </div>
                         </div>
                         <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <!-- Street View map start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Street View</h5>
                                        <span>Map shows view of street</span>
                                    </div>
                                    <div class="card-block">
                                        <div id="mapStreet" class="set-map"></div>
                                    </div>
                                </div>
                                <!-- Street View map end -->
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <!-- Map Types card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Map Types</h5>
                                        <span>Select your <code>map-types</code> to see differant views</span>
                                    </div>
                                    <div class="card-block">
                                        <div id="mapTypes" class="set-map"></div>
                                    </div>
                                </div>
                                <!-- Map Types card end -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <!-- GeoRSS Layers map start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>GeoRSS Layers</h5>
                                        <span>Shows <code>RSS</code> location</span>
                                    </div>
                                    <div class="card-block">
                                        <div id="georssmap" class="set-map"></div>
                                    </div>
                                </div>
                                <!-- GeoRSS Layers map end -->
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <!-- Marker Clustering map start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Marker Clustering</h5>
                                        <span>Multiple markers show differant location</span>
                                    </div>
                                    <div class="card-block">
                                        <div id="map" class="set-map"></div>
                                    </div>
                                </div>
                                <!-- Marker Clustering map end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                                    </div>
                                </div>
                </div>
            </div>
            <!-- Main-body end -->

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php include "c-footer-library.php"; ?>
</body>

</html>
