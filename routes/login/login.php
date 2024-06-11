<?php

session_start();
require_once('../../database/execute_query.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM client WHERE email = '$email'";
$login = execute_query($sql);

foreach($login as $login){
    if($email === $login['email'] && $password === $login['password'] && $login['type'] == 2){
        $_SESSION['user'] = $login['id'];

        header('Location: ../../pages/stock/index.php');

        exit;
    
    }elseif($email === $login['email'] && $password === $login['password'] && $login['type'] == 1){
        $_SESSION['user'] = $login['id'];

        header('Location: ../../pages/shop/index.php');

        exit;
    }
}

header('Location: ../../pages/auth/login/index.php');

exit;