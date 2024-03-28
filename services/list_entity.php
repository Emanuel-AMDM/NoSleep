<?php

require_once('../database/execute_query.php');

function list_entity_client(){
    
    $sql = "SELECT * FROM client";
    $client = execute_query($sql);

    return $client;
}

function list_entity_stock(){
    
    $sql = "SELECT * FROM stock";
    $stock = execute_query($sql);

    return $stock;
}

function list_entity_employee(){

    $sql = "SELECT * FROM employee";
    $employee = execute_query($sql);

    return $employee;
}