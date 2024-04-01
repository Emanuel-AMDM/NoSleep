<?php

require_once('../database/execute_query.php');

function list_entity_stock(){
    
    $sql = "SELECT * FROM stock ORDER BY part_code DESC";
    $stock = execute_query($sql);

    return $stock;
}