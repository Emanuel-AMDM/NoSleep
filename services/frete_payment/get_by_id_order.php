<?php

require_once('../../database/execute_query.php');

function get_by_id_order($id_user){  

    $sql = "SELECT * FROM orders WHERE id_client = $id_user ORDER BY id DESC";
    $client = execute_query($sql);

    foreach($client as $cli){
        if($cli['id_client'] == $id_user){
            return $cli;
        }
    }

}