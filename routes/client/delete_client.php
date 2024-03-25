<?php

require_once('../../services/client/delete_client.php');

delete_client($_GET['id']);

header('Location: ../login/index.html');