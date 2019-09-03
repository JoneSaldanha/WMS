<?php
    
    require("funcoes.php");

    $u = new Functions();
    $action = $_GET['action'];
  
    // function getAllRegisterRuas(){

    //     $allData = $u -> returnItensRuas();
    //     return $allData;

    // }  
    
    
    if ($action == "cadItemRua"){

        $nome = $_POST["nomeR"];
        $n_rua = $_POST["n_rua"];
        $lado = $_POST["ladoR"];
        $n_armario = $_POST["n_armarioR"];
        $n_andar = $_POST["n_andarR"];
        $quantidade = $_POST["quantidadeR"];
        $observacao = $_POST["observacaoR"];

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
        $n_armario = $_POST["n_armario"];
        $n_andar = $_POST["n_andar"];    
        $quantidade = $_POST["quantidade"];   
        $observacao = $_POST["observacao"];

        $u -> cadItemArmario($nome,                           
                             $n_armario,
                             $n_andar,
                             $quantidade,
                             $observacao);
   


    } 
    
    else if($action == "altIndexItemRua"){

        $id = $_POST["idPro"];
        $nome = $_POST["editNome"];
        $n_rua = $_POST["editRua"];
        $lado = $_POST["editLado"];
        $n_armario = $_POST["editArmario"];
        $n_andar = $_POST["editAndar"];
        $observacao = $_POST["editObservacao"];

        $u -> altItemRua($id, $nome, $n_rua, $lado, $n_armario, $n_andar, $observacao);

    }    
    else if($action == "altIndexItemArmario"){

        $id = $_POST["idPro"];
        $nome = $_POST["editNome"];
        $n_armario = $_POST["editArmario"];
        $n_andar = $_POST["editAndar"];
        $observacao = $_POST["editObservacao"];

        $u -> altItemArmario($id, $nome, $n_armario, $n_andar, $observacao);

    }    

    else if($action == "delIndexRua"){
        
        $idIndexDel = $_GET["id"];
        $u -> delIndexRua($idIndexDel);
    }
    else if($action == "delIndexArmario"){
        
        $idIndexDel = $_GET["id"];
        $u -> delIndexArmario($idIndexDel);
    }
    
    else if ($action == "sectionDestroy") {

        session_destroy();
        header("Location:../../login.php");
    }



?>