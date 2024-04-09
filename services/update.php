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
    $sql2 = "UPDATE client SET type = 1, name = '$name', surname = '$surname', email = '$email', telephone = '$telephone', gender = '$gender', login = '$email', password = '$password', cpf_cnpj = NULL, rg_ie = NULL, cep = NULL, road = NULL, neighborhood = NULL, city = NULL, state = NULL, complement = NULL, number = NULL, birthday = '$birthday', dt_created_at = '$dt_created_at', dt_updated_at = '$dt_updated_at' WHERE id = $id";
    execute_query($sql2);
}

function update_employee($id, $name, $surname, $birthday, $cpf_cnpj, $gender, $rg_ie, $telephone, $email, $cep, $road, $neighborhood, $city, $state, $complement, $number, $login, $password, $dt_created_at){

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
    $sql1 = "UPDATE client SET type = 2, name = '$name', surname = '$surname', email = '$email', telephone = '$telephone', gender = '$gender', login = '$login', password = '$password', cpf_cnpj = '$cpf_cnpj', rg_ie = '$rg_ie', cep = '$cep', road = '$road', neighborhood = '$neighborhood', city = '$city', state = '$state', complement = '$complement', number = '$number', birthday = '$birthday',dt_created_at = '$dt_created_at', dt_updated_at = '$dt_updated_at' WHERE id = $id";
    execute_query($sql1);
}

function update_stock($id, $part_code, $sector, $type, $subtype, $material, $line, $color, $details, $pp, $p, $m, $g, $gg, $xgg, $employee, $dt_register, $value, $dt_created_at, $name_picture){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_updated_at = $agora;

    if(empty($picture__input)){
        $picture__input = '';
    }

    if(empty($name_picture)){
        $name_picture = '';
    }

    if(empty($pp)){
        $pp = 0;
    }
    if(empty($p)){
        $p = 0;
    }
    if(empty($m)){
        $m = 0;
    }
    if(empty($g)){
        $g = 0;
    }
    if(empty($gg)){
        $gg = 0;
    }
    if(empty($xgg)){
        $xgg = 0;
    }

    //insert sql
    $sql1 = "UPDATE stock SET part_code = '$part_code', sector = '$sector', type = '$type', subtype = '$subtype', material = '$material', line = '$line', color = '$color', details = '$details', pp = '$pp', p = '$p', m = '$m', g = '$g', gg = '$gg', xgg = '$xgg', employee = '$employee', dt_register = '$dt_register', value = '$value', dt_created_at = '$dt_created_at', dt_updated_at = '$dt_updated_at', picture = '$name_picture' WHERE id = $id";
    execute_query($sql1);
}