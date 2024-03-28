<?php

require_once('../../services/create.php');

create_client($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['telephone'], $_POST['gender'], $_POST['birthday'], $_POST['password']);

header('Location: ../login/index.php');