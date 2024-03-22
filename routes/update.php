<?php

require_once('../services/update_client.php');

update_client($_GET['id'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['telephone'], $_POST['gender'], $_POST['birthday'], $_POST['password'], $_POST['dt_created_at']);

//header('Location: ../login/index.html');