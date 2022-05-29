<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$result = $this->user_model->getAllSettings(); 
$theme = $result->theme;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title><?php echo $title; ?></title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/simplebar.css'?>">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/feather.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/select2.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/dropzone.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/uppy.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/jquery.steps.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/jquery.timepicker.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/quill.snow.css'?>">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/daterangepicker.css'?>">
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/dataTables.bootstrap4.css'?>">
    <!-- SELECT2 CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/select2.css'?>">

    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/app-light.css'?>" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url().'public/tinydash/css/app-dark.css'?>" id="darkTheme">
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
  </head>
  <body class="horizontal dark  ">
    <div class="wrapper">