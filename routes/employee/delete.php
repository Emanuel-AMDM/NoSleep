<?php

require_once('../../services/delete.php');

delete_employee($_GET['id']);

header('Location: ../../employee/index.php');