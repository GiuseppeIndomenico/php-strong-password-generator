<?php

if (isset($_GET['numPass'])) {
    $passLength = $_GET['numPass'];
    $password = generaPassword($passLength);
    echo $password;
    //   var_dump($password);
    $_SESSION['password'] = $password;

    header('Location: http://localhost/php-strong-password-generator/pagePass.php');
}


?>