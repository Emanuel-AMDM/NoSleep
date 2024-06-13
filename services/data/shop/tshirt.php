<?php

require_once('../../database/execute_query.php');

function list_entity_tshirt(){
    
    $sql = "SELECT * FROM stock WHERE line = 'nosleeped'";
    $tshirt = execute_query($sql);

    return $tshirt;
}