<?php

require_once('../database/execute_query.php');

function create_client($name, $surname, $email, $telephone, $gender, $birthday, $password){

    $sql = "INSERT INTO client (id, name, surname, email, telephone, gender, birthday, password, dt_created_at, dt_updated_at) VALUES (NULL, '$name', '$surname', '$email', '$telephone', '$gender', '$birthday', '$password', NULL, NULL)";
    execute_query($sql);
}