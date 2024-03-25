<?php

require_once('../../services/stock/delete_stock.php');

delete_stock($_GET['id']);

header('Location: ../../stock/index.php');