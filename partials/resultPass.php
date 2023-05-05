<?php
session_start();


if (!empty($_SESSION['password'])) {

    if (isset($_GET['numPass'])) {
        $passLength = $_GET['numPass'];
        $password = generaPassword($passLength);
        echo $password;

        //   var_dump($password);
    }



}

?>