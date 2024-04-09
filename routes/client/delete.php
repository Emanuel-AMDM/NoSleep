<?php

require_once('../../services/delete.php');

delete_client($_GET['id']);

header('Location: ../../login/index.php');