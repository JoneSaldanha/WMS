<?php
    
    require("funcoes.php");

    $u = new Functions();
    $action = $_GET['action'];

    session_start();

  
    // function getAllRegisterRuas(){

    //     $allData = $u -> returnItensRuas();
    //     return $allData;

    // }  
    
    
    if ($action == "cadItem"){

        // $endereco = $_POST["endItem"];
        $nome = $_POST["nomeItem"];
        $referencia = $_POST["refItem"];
        // $quantidade = $_POST["qntItem"];
        $observacao = $_POST["obsItem"];

        $u -> cadItem($nome,  
                      $referencia,                               
                      $observacao);
                      
        // $data = date("d/m/Y");
        // $obs = "";
        // $arrayCod = array($endereco);
        // $arrayQuantidade = array($quantidade);

        // $u -> salvarRegistroEntrada($data, $obs, $arrayCod, $arrayQuantidade);
                    
    }else if($action == "altItem"){

        $id = $_POST["idPro"];
        $altNome = $_POST["editNome"];
        $codEnd = $_POST["endItem"];
        $altObs = $_POST["editObservacao"];

        $u -> altItem($id, 
                      $altNome, 
                      $codEnd,
                      $altObs);

    }else if ($action == "cadEnd"){
        // var_dump($_POST);

        $identificador = $_POST["inputType"];   
        $observacao = $_POST["endObs"];
        // $limite_itens = $_POST["endQntMx"];   

        $rua = "";
        $lado = "";
        $armario = ""; 
        $prateleira = "";
        $andar = "";
        $gaveteiro = "";
        $container = "";      
        
 
        if($identificador == "Ruas"){
            
            $rua = $_POST["endRua"];
            $lado = $_POST["endLado"];
            $prateleira = $_POST["endPrat"];
            $andar = $_POST["endAndar"];

        }else if($identificador == "Armarios"){

            $armario = $_POST["endArm"];  
            $lado = $_POST["endLado"];   
            $andar = $_POST["endAndar"];   

            
        }else if($identificador == "Gaveteiros"){

            $gaveteiro = $_POST["endGvt"];
            $andar = $_POST["endAndar"];   
            $container = $_POST["endContainer"];

            
        }

        // var_dump($identificador);
        // echo "<br>";
        // var_dump($rua);
        // echo "<br>";
        // var_dump($lado);
        // echo "<br>";
        // var_dump($armario);
        // echo "<br>";
        // var_dump($prateleira);
        // echo "<br>";
        // var_dump($andar);
        // echo "<br>";
        // var_dump($gaveteiro);
        // echo "<br>";
        // var_dump($container);
        // echo "<br>";
        // var_dump($observacao);
        // echo "<br>";
        // var_dump($limite_itens);
        // echo "<br>";

        $u -> cadEnd($identificador, 
                     $rua, 
                     $lado, 
                     $armario, 
                     $prateleira, 
                     $andar, 
                     $gaveteiro, 
                     $container, 
                     $observacao);
    
    } 

    
    

    // else if($action == "delIndexRua"){
        
    //     $idIndexDel = $_GET["id"];
    //     $u -> delItem($idIndexDel);
    // }
   
    
    else if($action == "salvarRegistroSaida"){

        $do_setor = $_POST["do_setor"];
        $ao_setor = $_POST["ao_setor"];
        $solicitante = $_POST["solicitante"];
        $solicitado = $_POST["solicitado"];
        $data = $_POST["data"];
        $observacao = $_POST["observacao"];

        $arrayCod = $_POST["cod"];
        $arrayQuantidade = $_POST["quantidade"];

        function getDuplicates( $array ) {
            return array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
        }
        
        $dupCod = sizeof(getDuplicates($arrayCod));
        
        if($dupCod > 0){

            echo "Valores Duplicados";

        }else{       
            $u -> salvarRegistroSaida($do_setor, 
                                      $ao_setor, 
                                      $solicitante, 
                                      $solicitado, 
                                      $data, 
                                      $observacao, 
                                      $arrayCod, 
                                      $arrayQuantidade);
            

        }
    }
    else if($action == "salvarRegistroEntrada"){

        $data = $_POST["data"];
        $observacao = $_POST["observacao"];

        $arrayCod = $_POST["cod"];
        $arrayQuantidade = $_POST["quantidade"];

        function getDuplicates( $array ) {
            return array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
        }
        
        $dupCod = sizeof(getDuplicates($arrayCod));
        
        if($dupCod > 0){

            echo "Valores Duplicados";

        }else{
       
            $u -> salvarRegistroEntrada($data, 
                                        $observacao, 
                                        $arrayCod, 
                                        $arrayQuantidade);
            

        }

    // $u -> salvarRegistro();
    
    }
    else if($action == "listItensReg"){

        $idReg = $_GET["id"];

        $u -> listItensReg($idReg);

    }
    
    else if ($action == "sectionDestroy") {
       
        session_destroy();
        header("Location:../../");
        exit();
    }



?>