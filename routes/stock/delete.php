<?php

require_once('../../services/delete.php');

delete_stock($_GET['id']);

header('Location: ../../stock/index.php');