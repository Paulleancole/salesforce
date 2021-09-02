<?php
session_start();
error_reporting(0);
include_once './includes/salesforce.php';
if (strlen($_SESSION['access_token']) > 0) {
    header('location:home.php');
} else {
    $username = "";
    $password = "";

    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = array('username' => $username, 'password' => $password, 'grant_type' => $grant_type, 
        'client_id' => $client_id, 'client_secret' => $client_secret);

        $options = array(
                        'http' => array(
                                        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                                        'method'  => 'POST',
                                        'content' => http_build_query($data)
                                        )
        );
        $context  = stream_context_create($options);

        try {
            
            $response = file_get_contents($salesforce_url, false, $context);
            if ($response === FALSE) { 
                echo "<script>alert('Usuario y/o contraseña inválidos');</script>";
            } else {
                $json_array=json_decode($response,true);

                function display_array_recursive($json_rec){
                    if($json_rec){
                        foreach($json_rec as $key=> $value){
                            if(is_array($value)){
                                display_array_recursive($value);
                            }else{
                                $_SESSION[$key] = $value;
                                // echo $key.'--'.$value.'<br>';
                            }	
                        }	
                    }	
                }
                display_array_recursive($json_array);
                header('location:home.php');
            }
        } catch (Exception $e) {
            // echo "<script>alert('Usuario y/o contraseña inválidos');</script>";
            echo "<script>alert('Error en la conexión:'.$e->getMessage().');</script>";
        }

    }
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
 <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="login-page bk-img" style="background-image: url(img/background.jpg);">
    <div class="form-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="well row pb-2x bk-light">
              <div class="col-md-8 col-md-offset-2">
                  <br><br><br><br><br><br>
                <!-- <div class="text-center">
                  <img src="img/logo.png" style="width:150px;" />
                </div> -->
                <form method="post" style="margin-top:20px;">
                  <label for="" class="text-uppercase text-sm">User
                  </label>
                  <input type="text" placeholder="Username" name="username" value="paul_mlc@hotmail.com" class="form-control mb" required>
                  <label for="" class="text-uppercase text-sm">Password
                  </label>
                  <input type="password" placeholder="Password" name="password" value="Aladelta1LEK67EVyqPOKVER8FlItGNJ8E" class="form-control mb" required>
                  <button class="btn btn-primary btn-block" name="login" type="submit">LOGIN
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Loading Scripts -->

</body>

</html>