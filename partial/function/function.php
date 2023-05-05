<?php


if (!empty($_GET['number'])) {
    $length = $_GET['number'];
} else {
    $length = 0;
}
function generatePassword($length)
{

    if ($length == 0) {
        $password = null;
    } else {
        $character = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
        $password = substr(str_shuffle($character), 0, $length);
    }
    return $password;
}
$password = generatePassword($length);
