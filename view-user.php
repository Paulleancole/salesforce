<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['access_token']) == 0) {
  header('location:index.php');
} else {
  date_default_timezone_set('America/Lima');
  if (isset($_REQUEST['Id'])) {
    $idUsuario = intval($_GET['Id']);
  }

  $sql = "SELECT DISTINCT U.`id`, U.`name`, U.`last_name`, U.`phone`, U.`email`
  FROM `users` U
  WHERE U.id = :Id";
  $query = $dbh->prepare($sql);
  $query->bindParam(':Id', $idUsuario, PDO::PARAM_STR);
  $query->execute();
  $resultu = $query->fetch(PDO::FETCH_OBJ);

?>
  <!doctype html>
  <html lang="en" class="no-js">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>User details
    </title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
      <?php include('includes/leftbar.php'); ?>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3 h5">
                  <a href="users.php"> Back
                  </a>
                </div>
                <div class="col-md-3 h5">
                </div>
                <div class="col-md-3 h5">
                </div>
                <div class="col-md-3 h5">
                </div>
              </div>
              <!-- Zero Configuration Table -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  User details
                </div>
                <div class="panel-body">
                  <div class="container">
                  <div class="row text-left">
                      Id: <?php echo htmlentities($resultu->id); ?>
                    </div>
                    <div class="row text-left">
                      First name: <?php echo htmlentities($resultu->name); ?>
                    </div>
                    <div class="row text-left">
                      Last name: <?php echo htmlentities($resultu->last_name); ?>
                    </div>
                    <div class="row text-left">
                    Phone: <?php echo htmlentities($resultu->phone); ?>
                    </div>
                    <div class="row text-left">
                    Mail: <?php echo htmlentities($resultu->email); ?>
                    </div>
                  </div>
                </div>
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
  </body>

  </html>
<?php } ?>