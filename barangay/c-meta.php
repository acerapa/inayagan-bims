<!DOCTYPE html>
<html lang="en">
<head>
   <title>City Information Management System</title>
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

   <script src="../assets/js/sweetalert2@11.js"></script>
   <script src="../assets/js/jquery/jquery.min.js"></script>
   <script src="../assets/js/jquery-ui/jquery-ui.min.js "></script>
   

   <?php 

   $page_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

   include "c-progress-bar.php";

   $plugin_assets_cdn = "http://127.0.0.1:8000/";

   ?>

   <script type="text/javascript" src="<?php echo $plugin_assets_cdn; ?>js/plugin_config.js"></script>

<head>
