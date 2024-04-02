<?php

require_once('../../database/execute_query.php');

function list_entity_caps(){
    
    $sql = "SELECT * FROM stock WHERE line = 'nosleepedcaps'";
    $caps = execute_query($sql);

    return $caps;
}