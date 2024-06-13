<?php

require_once('../../services/update.php');

$name_picture = $_POST['picture_current_name'];

if(file_exists($_FILES['picture__input']['tmp_name']) && is_uploaded_file($_FILES['picture__input']['tmp_name'])) {
    $name_picture = md5(uniqid(time() * rand())) . '.jpeg';
    move_uploaded_file($_FILES['picture__input']['tmp_name'], '../../uploads/' . $name_picture);
}

update_stock(
    $_GET['id'],
    $_POST['part_code'],
    mb_strtoupper($_POST['sector']),
    mb_strtoupper($_POST['type']),
    mb_strtoupper($_POST['subtype']),
    mb_strtoupper($_POST['material']), 
    mb_strtoupper($_POST['line']),
    mb_strtoupper($_POST['color']),
    mb_strtoupper($_POST['details']),
    mb_strtoupper($_POST['pp']),
    mb_strtoupper($_POST['p']),
    mb_strtoupper($_POST['m']),
    mb_strtoupper($_POST['g']),
    mb_strtoupper($_POST['gg']),
    mb_strtoupper($_POST['xgg']),
    mb_strtoupper($_POST['employee']),
    $_POST['dt_register'],
    $_POST['value'],
    $_POST['dt_created_at'],
    $name_picture
);

header('Location: ../../pages/stock/index.php');