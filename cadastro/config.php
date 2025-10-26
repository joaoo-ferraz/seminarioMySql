<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$password = '';
$dbName = 'cadastro';

$conexao = new mysqli($dbHost, $dbUsername, $password, $dbName);

    /*if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conexao efetuada com sucesso";
    } 
    */


?>