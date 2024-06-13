<?php

require_once('../../database/execute_query.php');

function list_entity_shoes(){
    
    $sql = "SELECT * FROM stock WHERE line = 'nosleepedshoes'";
    $shoes = execute_query($sql);

    return $shoes;
}