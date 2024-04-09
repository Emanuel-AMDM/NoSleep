<?php

require_once('../../services/delete.php');

delete_cart($_GET['id']);

header('Location: ../../cart/index.php');