<?php

require_once('../../services/update.php');

update_client(
    $_GET['id'],
    mb_strtoupper($_POST['name']),
    mb_strtoupper($_POST['surname']),
    $_POST['email'],
    $_POST['telephone'],
    $_POST['gender'],
    $_POST['birthday'],
    $_POST['password'],
    $_POST['dt_created_at']
);

header('Location: ../../login/index.html');