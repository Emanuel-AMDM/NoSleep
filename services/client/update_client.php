<?php

require_once('../../database/execute_query.php');

function update_client($id, $name, $surname, $email, $telephone, $gender, $birthday, $password, $dt_created_at){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_updated_at = $agora;

    //checa se email ja existe
    $sql1 = "SELECT * FROM client WHERE email = '$email'";
    $emails = execute_query($sql1);

    foreach($emails as $content){
        if($content['email'] === $email && $content['id'] != $id){
            return exit('E-mail já cadastrado');
        }
    }


    //insert sql
    $sql2 = "UPDATE client SET name = '$name', surname = '$surname', email = '$email', telephone = '$telephone', gender = '$gender', birthday = '$birthday', password = '$password', dt_created_at = '$dt_created_at', dt_updated_at = '$dt_updated_at' WHERE id = $id";
    execute_query($sql2);
}