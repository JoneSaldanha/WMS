<?php
    
    require("funcoes.php");

    $u = new Functions();
    $action = $_GET['action'];
  
    // function getAllRegisterRuas(){

    //     $allData = $u -> returnItensRuas();
    //     return $allData;

    // }  
    
    
    if ($action == "cadItemRua"){

        $nome = $_POST["nome"];
        $n_rua = $_POST["n_rua"];
        $lado = $_POST["lado"];
        $n_armario = $_POST["n_armario"];
        $n_andar = $_POST["n_andar"];
        $quantidade = $_POST["quantidade"];
        $observacao = $_POST["observacao"];

        $u -> cadItemRua($nome, 
                         $n_rua, 
                         $lado, 
                         $n_armario, 
                         $n_andar, 
                         $quantidade, 
                         $observacao);
       
    } 

    else if ($action == "cadItemArmario") {
       
        $nome = $_POST["nome"];
        $quantidade = $_POST["quantidade"];
        $n_armario = $_POST["n_armario"];
        $n_andar = $_POST["n_andar"];       
        $observacao = $_POST["observacao"];

        $u -> cadItemArmario($nome,
                             $quantidade,
                             $n_armario,
                             $n_andar,
                             $observacao);
   


    } 
    
    else if($action == "altIndexItemRua"){

        // var_dump($_POST);
        echo "<br>";

        $id = $_POST["idPro"];
        $nome = $_POST["editNome"];
        $n_rua = $_POST["editRua"];
        $lado = $_POST["editLado"];
        $n_armario = $_POST["editArmario"];
        $n_andar = $_POST["editAndar"];
        $observacao = $_POST["editObservacao"];

        $u -> altItemRua($id, $nome, $n_rua, $lado, $n_armario, $n_andar, $observacao);

    }    

    else if($action == "delIndexRua"){
        
        $idIndexDel = $_GET["id"];
        $u -> delIndexRua($idIndexDel);
    }
    
    else if ($action == "sectionDestroy") {

        session_destroy();
        header("Location:../../login.php");
    }



?>