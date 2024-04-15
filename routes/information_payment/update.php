<?php

require_once('../../services/update.php');

update_address(
    $_GET['id'],
    $_POST['cpf_cnpj'],
    $_POST['cep'],
    mb_strtoupper($_POST['road']),
    mb_strtoupper($_POST['neighborhood']),
    mb_strtoupper($_POST['city']),
    mb_strtoupper($_POST['state']),
    mb_strtoupper($_POST['complement']),
    $_POST['number']
);

header('Location: ../../payment/frete/index.php');