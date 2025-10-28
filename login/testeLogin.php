<?php
session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('../cadastro/config.php');

        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = $_POST['senha'];

        /*
        print_r('Email: ' .$email);
        print_r('<br>');
        print_r('Senha: ' .$senha);
        */

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);
        //print_r($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.html');
        }else{
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $row['nome'];
            header('Location: sistema.php');
        }

    }else{
        header('Location: login.html');
    }



?>