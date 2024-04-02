<?php

require_once('../../services/update.php');

update_employee(
    $_GET['id'],
    mb_strtoupper($_POST['name']),
    $_POST['dt_birth'],
    $_POST['cpf_cnpj'],
    $_POST['rg_ie'],
    $_POST['telephone'],
    $_POST['email'],
    $_POST['cep'],
    mb_strtoupper($_POST['road']),
    mb_strtoupper($_POST['neighborhood']),
    mb_strtoupper($_POST['city']),
    mb_strtoupper($_POST['state']),
    mb_strtoupper($_POST['complement']),
    $_POST['number'],
    $_POST['login'],
    $_POST['password'],
    $_POST['dt_created_at']);

header('Location: ../../employee/index.php');