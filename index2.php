<?php
  session_start();
  require_once("validate.php");
  $username_test = test($_POST['username']);
  if ( $username_test == "ok" )
  {
          $password_test = test($_POST['password']);
          if ($password_test == "ok")
          {
             $_SESSION['username'] = $_POST['username'];
             $_SESSION['password'] = $_POST['password'];
             header("location:check_db.php");
             exit();
          }
          else
          {
            $_SESSION['fel'] = "password: ".$password_test;
            header("location:fel.php");
            exit();
          }
  }
  else
  {
    $_SESSION['fel'] = "username: ".$username_test;
    header("location:fel.php");
    exit();
  }
?>
