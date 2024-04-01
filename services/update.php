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

function update_employee($id, $name, $dt_birth, $cpf_cnpj, $rg_ie, $telephone, $email, $cep, $road, $neighborhood, $city, $state, $complement, $number, $login, $password, $dt_created_at){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_updated_at = $agora;


    //insert sql
    $sql1 = "UPDATE employee SET name = '$name', dt_birth = '$dt_birth', cpf_cnpj = '$cpf_cnpj', rg_ie = '$rg_ie', telephone = '$telephone', email = '$email', cep = '$cep', road = '$road', neighborhood = '$neighborhood', city = '$city', state = '$state', complement = '$complement', number = '$number', login = '$login', password = '$password', dt_created_at = '$dt_created_at', dt_updated_at = '$dt_updated_at' WHERE id = $id";
    execute_query($sql1);
}

function update_stock($id, $part_code, $sector, $type, $subtype, $material, $line, $color, $details, $size, $employee, $dt_register, $value, $dt_created_at, $name_picture, $qntd_part){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_updated_at = $agora;

    if(empty($picture__input)){
        $picture__input = '';
    }

    if(empty($name_picture)){
        $name_picture = '';
    }

    //insert sql
    $sql1 = "UPDATE stock SET part_code = '$part_code', sector = '$sector', type = '$type', subtype = '$subtype', material = '$material', line = '$line', color = '$color', details = '$details', size = '$size', employee = '$employee', dt_register = '$dt_register', value = '$value', qntd_part = '$qntd_part', dt_created_at = '$dt_created_at', dt_updated_at = '$dt_updated_at', picture = '$name_picture' WHERE id = $id";
    execute_query($sql1);
}