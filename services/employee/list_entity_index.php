<?php

require_once('../../database/execute_query.php');

function list_entity_employee(){

    $sql = "SELECT * FROM client WHERE type = 2";
    $employee = execute_query($sql);

    return $employee;
}