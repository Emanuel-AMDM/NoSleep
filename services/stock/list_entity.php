<?php

require_once('../database/execute_query.php');

function list_entity_stock(){
    
    $sql = "SELECT * FROM stock";
    $stock = execute_query($sql);

    return $stock;
}