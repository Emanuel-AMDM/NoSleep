<?php

require_once('../../services/create.php');

create_employee($_POST['name'], $_POST['dt_birth'], $_POST['cpf_cnpj'], $_POST['rg_ie'], $_POST['telephone'], $_POST['email'], $_POST['cep'], $_POST['road'], $_POST['neighborhood'], $_POST['city'], $_POST['state'], $_POST['complement'], $_POST['number'], $_POST['login'], $_POST['password']);

header('Location: ../../employee/create/index.php');