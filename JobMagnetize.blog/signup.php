<?php
session_start();
require_once "db_connect.php";

if(isset($_SESSION['user'])) {
    echo "<script>window.location.replace('');</script>";
} else {
    unset($_SESSION['user']);
}

?>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlsave = $pdo->query("INSERT INTO users VALUES ('', '$name', '$email', '$password')");

    if ($sqlsave) {
        echo "<script>
                alert('Register Success!');
                window.location.replace('loginpage.php');
              </script>";
        exit(); 
    } else {
        echo "Error occurred during registration.";
    }
}
?>
