<?php

require_once('../../services/update.php');

update_cart(
    $_GET['id'],
    $_POST['qntd_part'],
    $_POST['size']
);

header('Location: ../../cart/index.php');