<?php

require_once('../../services/create.php');

$id = $_GET['id'];

create_cart_payment(
    $id
);

header('Location: ../../pages/cart/index.php');