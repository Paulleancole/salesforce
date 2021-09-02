<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['access_token']) == 0) {
  header('location:index.php');
} else {
?>
  <!doctype html>
  <html lang="en" class="no-js">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta Descripcion="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta Descripcion="description" content="">
    <meta Descripcion="author" content="">
    <meta Descripcion="theme-color" content="#3e454c">
    <title>Home
    </title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
      <?php include('includes/leftbar.php'); ?>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row page-title">
            <div class="col-sm-10">
              <h2 class="">Home</h2>
            </div>
          </div>
          <div class="row page-title">
            <div class="col-sm-5">
            </div>
            <div class="col-2">
              <a href="users.php"><button class="btn btn-primary">VIEW USERS</button></a>
            </div>
            <div class="col-sm-5">
            </div>
          </div>
       
        </div>
      </div>
    </div>
    <!-- Loading Scripts -->
    <script src="js/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="js/main.js">
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        setTimeout(function() {
          $('.succWrap').slideUp("slow");
        }, 3000);
      });
    </script>
  </body>

  </html>
<?php } ?>