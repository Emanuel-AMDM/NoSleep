<?php

require_once('../../database/execute_query.php');

function list_entity_sweatshirts(){
    
    $sql = "SELECT * FROM stock WHERE line = 'nosleepedsweatshirts'";
    $sweatshirts = execute_query($sql);

    return $sweatshirts;
}