<?php

require_once('../../services/create.php');

$id = $_GET['id'];

create_cart_payment(
    $id
);

header('Location: ../../cart/index.php');