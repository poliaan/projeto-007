<?php

$host = '10.127.0.185'; // servidor
$dbname = 'phpt_poliana_a'; //banco de dados
$username = 'phpt_poliana_a'; 
$password = '2024@poliana';

try{
    // criar a conexão com o banco
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4"; // nome da fonte de dados (dsn)
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // configura um modo de erro, trata exceções
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // define o modo de fetch para associativo, todo resultado vai ser tratado como array
        PDO::ATTR_EMULATE_PREPARES => false, //Desativa emulação de prepared statements por segurança
    ];

    //instanciar a conexão
    $pdo = new PDO ($dsn, $username, $password, $options);
} catch (PDOException $e){
    //Captura e exibe os erros da conexão
    die("Erro ao conectar ao Banco de Dados: " . $e->getMessage());
}