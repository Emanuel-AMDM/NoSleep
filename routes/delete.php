<?php

require_once('../services/delete_client.php');

delete_client($_GET['id']);

header('Location: ../login/index.html');