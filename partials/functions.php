<?php
function generaPassword($passLength)
{
    $poolCaratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*';
    $password = '';
    for ($i = 0; $i < $passLength; $i++) {
        $carattere = $poolCaratteri[rand(0, strlen($poolCaratteri) - 1)];
        $password .= $carattere;
    }
    return $password;
}




?>