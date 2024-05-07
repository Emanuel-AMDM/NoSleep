<?php

require_once('../../services/create.php');

create_address_order(
    $_GET['id'],
    $_POST['cep'],
    mb_strtoupper($_POST['road']),
    $_POST['number'],
    mb_strtoupper($_POST['complement']),
    mb_strtoupper($_POST['neighborhood']),
    mb_strtoupper($_POST['city']),
    mb_strtoupper($_POST['state']),
    $_POST['amount']
);

header('Location: ../../payment/frete/index.php');