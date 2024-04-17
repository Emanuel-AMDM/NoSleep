<?php

require_once('../../database/execute_query.php');

function get_by_id($id_user){  

    $sql = "SELECT * FROM client WHERE id = $id_user";
    $client = execute_query($sql);

    foreach($client as $cli){
        if($cli['id'] == $id_user){
            return $cli;
        }
    }

}