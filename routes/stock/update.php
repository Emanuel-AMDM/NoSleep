<?php

require_once('../../services/update.php');

$name_picture = $_POST['picture__input'];
if(isset($_FILES['picture__input'])){
    move_uploaded_file($_FILES['picture__input']['tmp_name'], '../../uploads/' . $name_picture);
}

update_stock($_GET['id'], $_POST['part_code'], $_POST['sector'], $_POST['type'], $_POST['subtype'], $_POST['material'], $_POST['line'], $_POST['color'], $_POST['details'], $_POST['size'], $_POST['employee'], $_POST['dt_register'], $_POST['value'], $_POST['dt_created_at'], $name_picture, $_POST['qntd_part']);

header('Location: ../../stock/index.php');