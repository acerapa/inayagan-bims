<!DOCTYPE html>
<html lang="en">
<head>
   <title>MIS for Barangay Inayagan, City of Naga</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="description" content="" />
   <meta name="keywords" content="BIMS, Sample" />
   <meta name="author" content="codedthemes" />
   <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
   <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
   <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
   <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
   <link rel="stylesheet" href="../assets/icon/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.css">
   <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
   <link rel="stylesheet" href="../assets/css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.4.1/papaparse.js" integrity="sha512-M0cjXJTonbWEdLI3HJIoJSQBb9980RWmOCk+tvWkhgFrAZqSSIg1+1Db/vDu7Qk9W3L90gBynve17PYvarjfQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="../assets/js/sweetalert2@11.js"></script>
   <script src="../assets/js/jquery/jquery.min.js"></script>
   <script src="../assets/js/jquery-ui/jquery-ui.min.js "></script>
   

   <?php 

   $page_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

   include "c-progress-bar.php";

   /**
     * Laravel Plugin Set-up
     * 
     *  
     */
    

    $laravel_hostname = "http://127.0.0.1:8000/";
    // $laravel_hostname = "https://mis-inayagan-naga.tech/partition-api-multi-purpose/version-1/public/";
    
    $laravel_plugins  = ["plugin_config","plugin_auth","plugin_blog","plugin_faq","plugin_currency","plugin_datetime","plugin_geo","plugin_inquiry_web_form","plugin_inquiry","plugin_json_data","plugin_localstorage_with_expiry","plugin_mailer","plugin_photos","plugin_query","plugin_reference_id","plugin_review","plugin_ui","plugin_url","plugin_user","plugin_util_object_array","plugin_validator"];
    foreach($laravel_plugins as $Laraplug) {
      echo "<script type='text/javascript' src='". $laravel_hostname ."js/". $Laraplug .".js'></script>";
    }
   ?>

   

<head>
