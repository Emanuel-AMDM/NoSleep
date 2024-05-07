<?php
session_start();

require_once('../../services/create.php');

if(!isset($_SESSION['user'])){
    header('Location: ../../login/index.php');
}else{
    $id_client = $_SESSION['user'];
}

create_cart(
    $_GET['id'],
    $id_client,
    $_POST['qntd_part'],
    $_POST['size']
);

header('Location: ../../cart/index.php');