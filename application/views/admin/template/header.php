<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Derukopi Sentiment Analysis</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/bower_components/bootstrap/dist/css/bootstrap.min.css"); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/bower_components/font-awesome/css/font-awesome.min.css"); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/bower_components/Ionicons/css/ionicons.min.css"); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/dist/css/AdminLTE.min.css"); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/dist/css/skins/_all-skins.min.css"); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/bower_components/morris.js/morris.css"); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/bower_components/jvectormap/jquery-jvectormap.css"); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/bower_components/bootstrap-daterangepicker/daterangepicker.css"); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo BASE_URL("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>"/>
  <!-- jQuery UI 1.11.4 -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
  

  <script src="<?php echo BASE_URL("assets/bower_components/jquery-ui/jquery-ui.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ckeditor/ckeditor.js') ?>"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
  </script>
  <script>
          $(document).ready( function () {
          $('#table_id_2').DataTable();
          } );
        </script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>