<?php

require_once('../../database/execute_query.php');

function create_client($name, $surname, $email, $telephone, $gender, $birthday, $password){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    //checa se email ja existe
    $sql1 = "SELECT email FROM client WHERE email = '$email'";
    $emails = execute_query($sql1);

    if(count($emails) > 0){
        return exit('E-mail já cadastrado');
    }

    //insert sql
    $sql2 = "INSERT INTO client (id, name, surname, email, telephone, gender, birthday, password, dt_created_at, dt_updated_at) VALUES (NULL, '$name', '$surname', '$email', '$telephone', '$gender', '$birthday', '$password', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql2);
}