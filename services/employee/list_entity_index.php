<?php

require_once('../database/execute_query.php');

function list_entity_employee(){

    $sql = "SELECT * FROM employee";
    $employee = execute_query($sql);

    return $employee;
}