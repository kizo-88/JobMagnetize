<?php
session_start();
require_once "db_connect.php";

if (isset($_SESSION['user'])) {
    echo "<script>window.location.replace('');</script>";
} else {
    unset($_SESSION['user']);
}

?>

<?php

if(isset($_POST['submit'])) {
  $email = ($_POST['email']);
  $password = ($_POST['password']);
  $sqll = $pdo->query("SELECT * FROM users WHERE email='$email' && password='$password'");
  $search = $sqll->rowCount();
  $access = $sqll->fetch();

    if ($search) {

        $_SESSION['user'] = $access['id'];
        echo "<script>
                alert('Login Success!');
                window.location.replace('index.html');
              </script>";
    } else {
        echo "<script>
                alert('Sorry, Login Failed!');
                window.location.replace('loginpage.php');
              </script>";
    }
}
?>
