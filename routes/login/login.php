<?php

session_start();
require_once('../../database/execute_query.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM client WHERE email = '$email'";
$login = execute_query($sql);

foreach($login as $login){
    if($email === $login['email'] && $password === $login['password']){
        $_SESSION['user'] = $login['id'];

        header('Location: ../../shop/index.php');

        exit;
    }
}

header('Location: ../../login/index.php');

exit;