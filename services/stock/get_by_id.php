<?php

require_once('../../../database/execute_query.php');

function get_stock_by_id($id){

    $sql = "SELECT * FROM stock WHERE id = $id";
    $stock = execute_query($sql);

    foreach($stock as $stock){
        if($stock['id'] == $id){
            return $stock;
        }
    }

}