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
    $sql2 = "INSERT INTO client (id, type, name, surname, email, telephone, gender, login, password, cpf_cnpj, rg_ie, cep, road, neighborhood, city, state, complement, number, birthday, dt_created_at, dt_updated_at) VALUES (NULL, 1, '$name', '$surname', '$email', '$telephone', '$gender', '$email', '$password', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$birthday', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql2);
}

function create_employee($name, $surname, $birthday, $cpf_cnpj, $gender, $rg_ie, $telephone, $email, $cep, $road, $neighborhood, $city, $state, $complement, $number, $login, $password, $birthday){

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
    $sql1 = "INSERT INTO client (id, type, name, surname, email, telephone, gender, login, password, cpf_cnpj, rg_ie, cep, road, neighborhood, city, state, complement, number, birthday, dt_created_at, dt_updated_at) VALUES (NULL, 2, '$name', '$surname', '$email', '$telephone', '$gender', '$login', '$password', '$cpf_cnpj', '$rg_ie', '$cep', '$road', '$neighborhood', '$city', '$state', '$complement', '$number', '$birthday', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);
}

function create_stock($part_code, $sector, $type, $subtype, $material, $line, $color, $details, $pp, $p, $m, $g, $gg, $xgg, $employee, $dt_register, $value, $name_picture){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    if(empty($part_code)){
        $part_code = '';
    }

    if(empty($sector)){
        $sector = '';
    }
    
    if(empty($type)){
        $type = '';
    }

    if(empty($subtype)){
        $subtype = '';
    }

    if(empty($material)){
        $material = '';
    }

    if(empty($line)){
        $line = '';
    }

    if(empty($color)){
        $color = '';
    }

    if(empty($details)){
        $details = '';
    }

    if(empty($size)){
        $size = '';
    }

    if(empty($employee)){
        $employee = '';
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
    $sql1 = "INSERT INTO stock (part_code, sector, type, subtype, material, line, color, details, pp, p, m, g, gg, xgg, employee, dt_register, value, dt_created_at, dt_updated_at, picture) VALUES ('$part_code', '$sector', '$type', '$subtype', '$material', '$line', '$color', '$details', '$pp', '$p', '$m', '$g', '$gg', '$xgg', '$employee', '$dt_register', '$value', '$dt_created_at', '$dt_updated_at', '$name_picture')";
    execute_query($sql1); 
}

function create_cart($id_part, $id_client, $qntd_part, $size){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    if(empty($qntd_part)){
        $qntd_part = 0;
    }
    
    if(empty($size)){
        $size = 0;
    }

    //insert sql
    $sql1 = "INSERT INTO cart (id_part, id_client, qntd_part, size, dt_created_at, dt_updated_at) VALUES ('$id_part', '$id_client', '$qntd_part', '$size', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);
}