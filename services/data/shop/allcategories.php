<?php

require_once('../../database/execute_query.php');

function list_entity_allcategories(){
    
    $sql = "SELECT * FROM stock";
    $allcategories = execute_query($sql);

    return $allcategories;
}