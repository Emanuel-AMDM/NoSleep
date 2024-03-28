<?php

require_once('../../services/update.php');

update_stock($_GET['id'], $_POST['part_code'], $_POST['sector'], $_POST['type'], $_POST['subtype'], $_POST['material'], $_POST['line'], $_POST['color'], $_POST['details'], $_POST['size'], $_POST['employee'], $_POST['dt_register'], $_POST['value'], $_POST['dt_created_at'], $_POST['picture__input'], $_POST['qntd_part']);

header('Location: ../../stock/index.php');