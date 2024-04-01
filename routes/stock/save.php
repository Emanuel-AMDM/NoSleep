<?php

require_once('../../services/create.php');

$name_picture = md5(uniqid(time() * rand())) . '.jpeg';
if(isset($_FILES['picture__input'])){
    move_uploaded_file($_FILES['picture__input']['tmp_name'], '../../uploads/' . $name_picture);
}

create_stock($_POST['part_code'], $_POST['sector'], $_POST['type'], $_POST['subtype'], $_POST['material'], $_POST['line'], $_POST['color'], $_POST['details'], $_POST['size'], $_POST['employee'], $_POST['dt_register'], $_POST['value'], $name_picture, $_POST['qntd_part']);

header('Location: ../../stock/create/index.php');