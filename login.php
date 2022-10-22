<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    $sql = "Select * from user where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:/scheduler/welcome.php");
    }
    
    else{
        $showError = "Invalid Credentials";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>


  <body>
    <?php require 'partials/_nav.php' ?>
    <?//php require 'inc/topBarNav.php' ?>
    <?php
    if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>'.$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>


    <div class="center">
      <h1>Login</h1>
      <form  method="post" action="/scheduler/login.php">
        <div class="txt_field">
          <input type="text" required class="form-control" id="username" name="username" aria-describedby="emailHelp">
          <span></span>
          <label for="username" class="form-label">VoterID</label>
        </div>
        <div class="txt_field">
          <input type="password" required class="form-control" id="password" name="password">
          <span></span>
          <label for="password" class="form-label">Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="blank"></div>
      </form>
    </div>

  </body>
</html>
