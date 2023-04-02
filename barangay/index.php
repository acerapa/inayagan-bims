<?php include "c-meta.php"; ?>

  <body themebg-pattern="theme1">

    <?php include "c-theme-loader.php"; ?>

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material js-jky6abnxvsde" action="" method="post">
                            <div class="text-center">
                                <h3 class="text-white">CIMS | Barangay</h3>
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Your Email Address</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <select class="form-control js-hjyt5redsww23" name="city_code">
                                            <option value="0">Select City</option>
                                        </select>
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <select class="form-control js-kiytgsdfe4w3" name="brgy_code">
                                            <option value="0">Select Barangay</option>
                                        </select>
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20 js-ihgdxcfsde4u">Sign in</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Brgy. Inayagan</p>
                                            <p class="text-inverse text-left">City of Naga, Cebu</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="../assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    
    <?php include "c-footer-library.php"; ?>
    <script type="text/javascript" src="../assets/js-custom/js-custom-brgy-index.js"></script>
</body>

</html>
