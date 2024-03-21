<?php

function execute_query($sql)
{

    // Configurações do banco de dados
    $servername = "localhost"; // Endereço do servidor MySQL (normalmente localhost)
    $username = "root"; // Nome de usuário do MySQL
    $password = ""; // Senha do MySQL
    $dbname = "nosleep"; // Nome do banco de dados

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Atira um erro e para a execucao da funcao se nao for possivel abrir uma conexao
    if ($conn->connect_error) {
        throw new Error("Erro na conexão: " . $conn->connect_error);
    }

    // Executa a query
    $result = $conn->query($sql);

    //verifica se reult é booleano, usado quando é executado insert, delete, update
    if(is_bool($result)){
        return $result;
    }
    // Verifica se a consulta retornou resultados
    if ($result->num_rows === 0) {
        return [];
    }

    // Array para agrupar os dados
    $data = [];

    // Percorre todas as linhas da resposta e agrupa elas dentro da variavel $data
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Fecha a conexão com o banco de dados quando terminar
    $conn->close();

    // Retorna os dados encontrados
    return $data;
}
