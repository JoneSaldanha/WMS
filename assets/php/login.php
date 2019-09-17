<?php
    
    require_once 'conexao.php';

    session_start(); 


    $u = new Connect();
    $pdo = $u -> Con();

    // $action = $_GET['action'];


    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if(empty($_POST['login']) || empty($_POST['senha'])) {
        echo "Erro 00";
        exit();
    }
   

    // $hash = password_hash("T5b04rt3almx",PASSWORD_ARGON2I);
    // echo $hash;

    $sqlVerifyUser = $pdo -> query("SELECT COUNT(*) FROM usuarios WHERE login = '{$login}'");
    $numRows = $sqlVerifyUser -> rowCount();
    
    // echo "<br>";
    // var_dump($numRows);

    if($numRows > 0){

        $sqlVerifyPass = $pdo -> query("SELECT senha FROM usuarios WHERE login = '{$login}'");
        $resultPass = $sqlVerifyPass -> fetchColumn();

        // echo($resultPass);

        if(password_verify($senha, $resultPass)){
            
            $_SESSION['Status'] = "Logado";
            header('Location: ../../examples/dashboard.php');

            // header('location:site.php');
    
        }else{
            echo "Erro 01";
            exit; 
        }
    
        
    }


    



?>