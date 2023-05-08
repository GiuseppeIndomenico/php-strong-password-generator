<?php
//session_start();
if (isset($_GET['numPass'])) {
    $passLength = $_GET['numPass'];
    $password = generaPassword($passLength);
    echo $password;
    //   var_dump($password);
    $_SESSION['password'] = $password;

    header('Location: ./pagePass.php');
}


?>