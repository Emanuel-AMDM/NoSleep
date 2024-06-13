<?php

require_once('../../services/create.php');

$name_picture = md5(uniqid(time() * rand())) . '.jpeg';
if(isset($_FILES['picture__input'])){
    move_uploaded_file($_FILES['picture__input']['tmp_name'], '../../uploads/' . $name_picture);
}

create_stock(
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
    $name_picture
);

header('Location: ../../pages/stock/create.php');