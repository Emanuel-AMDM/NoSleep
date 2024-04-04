<?php

require_once('../../database/execute_query.php');

function list_entity_viewpart($id){

    $sql = "SELECT * FROM stock WHERE id = $id";
    $stock = execute_query($sql);

    foreach($stock as $stock){
        $line = $stock['line'];
    }
    
    $sql = "SELECT * FROM stock WHERE line = '$line' ORDER BY part_code DESC LIMIT 4";
    $viewpart = execute_query($sql);

    return $viewpart;
}