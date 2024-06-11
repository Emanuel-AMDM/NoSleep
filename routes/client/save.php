<?php

require_once('../../services/create.php');

create_client(
    mb_strtoupper($_POST['name']),
    mb_strtoupper($_POST['surname']),
    $_POST['email'],
    $_POST['telephone'],
    $_POST['gender'],
    $_POST['birthday'],
    $_POST['password']
);

header('Location: ../../pages/auth/login/index.php');