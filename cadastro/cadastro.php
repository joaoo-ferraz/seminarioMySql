<?php 

if(isset($_POST['submit'])) { 

include_once('config.php');

$nome = $_POST['nome']; 
$email = $_POST['email']; 
$senha = $_POST['senha'];
$endereco = $_POST['endereco']; 
$telefone = $_POST['telefone']; 
$genero = $_POST['genero']; 
$dataNascimento = $_POST['dataNascimento']; 

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, genero, dataNascimento, endereco)
VALUES ('$nome', '$email', '$senha', '$telefone', '$genero', '$dataNascimento', '$endereco')");

header('Location: ../login/login.html');

if($result) {
        echo "Cadastro realizado com sucesso!";

    } else {
        echo "Erro ao cadastrar!";
        echo "Erro: " . mysqli_error($conexao);
        echo '<br><br>';
    }
}

echo '<a href="/seminarioMySql/login/home.html">Voltar</a>';

?>