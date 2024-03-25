<?php

require_once('../../services/stock/create_stock.php');

create_stock($_POST['part_code'], $_POST['sector'], $_POST['type'], $_POST['subtype'], $_POST['material'], $_POST['line'], $_POST['color'], $_POST['details'], $_POST['size'], $_POST['employee'], $_POST['dt_register'], $_POST['value'], $_POST['picture__input']);

header('Location: ../../stock/create/index.php');