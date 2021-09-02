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
    <title>Users
    </title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Admin Style -->
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
            <h2 class="">Users</h2>
          </div>
        </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">User list
                </div>
                <div class="panel-body">
                  <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Id
                        </th>
                        <th>First name
                        </th>
                        <th>Last name
                        </th>
                        <!-- <th>Phone
                        </th>
                        <th>Mail
                        </th> -->
                        <th>Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        
                        $sql = " SELECT DISTINCT U.`id`, U.`name`, U.`last_name`, U.`phone`, U.`email`
                                  FROM `users` U";
                        
                      
                      $query = $dbh->prepare($sql);
                      $query->execute();
                      $results = $query->fetchAll(PDO::FETCH_OBJ);
                      if ($query->rowCount() > 0) {
                        foreach ($results as $result) {        ?>

                          <tr>
                            <td>
                              <?php echo htmlentities($result->id); ?>
                            </td>
                            <td>
                              <?php echo htmlentities($result->name); ?>
                            </td>
                            <td>
                              <?php echo htmlentities($result->last_name); ?>
                            </td>
                            <!-- <td>
                              <?php echo htmlentities($result->phone); ?>
                            </td>
                            <td>
                              <?php echo htmlentities($result->email); ?>
                            </td> -->
                            <td>
                              <a class="label label-primary" href="view-user.php?Id=<?php echo $result->id; ?>">View details
                              </a>
                            </td>
                          </tr>
                      <?php
                        }
                      } ?>
                    </tbody>
                  </table>
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
    <script src="js/bootstrap-select.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="js/jquery.dataTables.min.js">
    </script>
    <script src="js/dataTables.bootstrap.min.js">
    </script>
    <script src="js/Chart.min.js">
    </script>
    <script src="js/chartData.js">
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