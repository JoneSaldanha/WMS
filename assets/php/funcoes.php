<?php 

    require_once 'conexao.php';


    class Functions{   
           
        Private $u;
        Private $pdo;

        public function __construct(){

            $this -> u = new Connect();
            $this -> pdo = $this -> u -> Con();

        }

        
        Private function getLastId($tabela){

            $sqlSelect = $this -> pdo -> prepare ("SELECT MAX(id) as id FROM $tabela");
            $sqlSelect -> execute();
            $lastId = $sqlSelect -> fetch();
            
            $id = $lastId['id'];

            return $id++;

        }

        public function listItensReg($idReg){

            $idRegistro = (int)$idReg;

            $sqlSelectAll = $this-> pdo-> query ("SELECT * FROM registros_itens WHERE id_registro = $idRegistro");         
            $allRegisters = $sqlSelectAll->fetchAll(PDO::FETCH_ASSOC);

            // var_dump($allRegisters);
            echo json_encode($allRegisters);
        }

        // function validaEnd(){


        // }

        // function validaQntCadastro($qntItemCad, $endereco){
            
        //     $limiteItensEnd = 0;
        //     $totalDeItensNoEnd = 0;

        //     $sqlTotalDeItensNoEnd= $this -> pdo -> query ("SELECT quantidade FROM itens WHERE cod_end ='{$endereco}'");
        //     $resultSTDNE = $sqlTotalDeItensNoEnd -> fetchAll(PDO::FETCH_ASSOC);

        //     // var_dump($resultSTDNE);
        
        //     $sqlLimiteEnd = $this -> pdo -> query ("SELECT limite_itens FROM enderecos WHERE id ='{$endereco}'");
        //     $valuLimiteEnd = $sqlLimiteEnd -> fetch();

        //     foreach($resultSTDNE as $qntLimite){
        //         $totalDeItensNoEnd += $qntLimite["quantidade"];
        
        //     }
        //     $limiteItensEnd = $valuLimiteEnd["limite_itens"];

        //     $boolVQC = $totalDeItensNoEnd + $qntItemCad;
            
        //     $msqError = "";

        //     if($boolVQC > $limiteItensEnd){
        //         $msqError = "QEL";
        //         return $msqError;
        //     }else{
        //         $msqError = "QP";
        //         return $msqError;
        //     }
        

        // }

        function cadItem($nome, $referencia, $observacao) {
            
            $checkVarItem = $this -> pdo -> query ("SELECT id FROM itens WHERE nome ='{$nome}'");
            $rowItem = $checkVarItem -> rowCount();

            // $checkVarEnd = $this -> pdo -> query ("SELECT id FROM enderecos WHERE id ='{$endereco}'");
            // $rowEnd = $checkVarEnd -> rowCount();

            // $msqError = $this -> validaQntCadastro($quantidade, $endereco);


            if ($rowItem > 0) {

                echo "Item Ja Cadastrado";

                // header("Location:../../examples/dashboard.php");

            // }else if($rowEnd == 0){

            //     echo "Error End";

            // }else if($msqError == "QEL"){
               
            //     echo ("Quantidade Excedida");

            }else{
               
                $arrayData = array(':nome' => $nome,
                                   ':referencia' => $referencia,
                                   ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO itens (nome, referencia, observacao) 
                                                    VALUES (:nome, :referencia, :observacao)");                                   
                $sqlInsert -> execute($arrayData);

                echo "Sucesso";
            }

        }


        function cadEnd($identificador, $rua, $lado, $armario, $prateleira, $andar, $gaveteiro, $container, $observacao) {
            
            $checkVar = $this -> pdo -> query ("SELECT `id` FROM `enderecos` WHERE rua = '{$rua}' 
                                                                             AND lado = '{$lado}' 
                                                                             AND armario = '{$armario}'
                                                                             AND prateleira = '{$prateleira}'
                                                                             AND andar = '{$andar}' 
                                                                             AND gaveteiro = '{$gaveteiro}' 
                                                                             AND container = '{$container}'");
            $row = $checkVar -> rowCount();
            // var_dump($row);
            // var_dump($checkVar);
            // $checkVar -> execute();
            // $id = $checkVar -> fetch();
            // var_dump($id);

            if ($row > 0) {

                echo "Erro";


            } else {
                // echo $identificador;
                $arrayData = array(':identificador' => $identificador,
                                   ':rua' => $rua,
                                   ':lado' => $lado,
                                   ':armario' => $armario,
                                   ':prateleira' => $prateleira,
                                   ':andar' => $andar,
                                   ':gaveteiro' => $gaveteiro,
                                   ':container' => $container,
                                   ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO enderecos (identificador, rua, lado, armario, prateleira, andar, gaveteiro, container, observacao) 
                                                    VALUES (:identificador, :rua, :lado, :armario, :prateleira, :andar, :gaveteiro, :container, :observacao)");                                   
                $sqlInsert -> execute($arrayData);

                echo "Sucesso";
            }

        }

        
        function altItem($id, $altNome, $altEnd, $altObs){

            $idPro = (int)$id;

            $checkVarEnd = $this -> pdo -> query ("SELECT id FROM enderecos WHERE id ='{$altEnd}'");
            $rowEnd = $checkVarEnd -> rowCount();

            if($rowEnd <= 0){
                
                echo "Endereço Inexistente";

            }else{

                $sqlUpdate = $this -> pdo -> query ("UPDATE `itens` 
                                                     SET `cod_end` = '{$altEnd}',
                                                     `observacao` = '{$altObs}'
                                                     WHERE `id` = '{$idPro}'");
                echo "Sucesso";

                // $sqlUpdate -> execute($arrayData);

            }


        }
        
       
        // function delItem($idDelIndex){

        //     $sqlDelIndexRua = $this -> pdo -> query("DELETE FROM `itens_ruas` WHERE id = $idDelIndex");
        //     header("Location:../../examples/estoque.php");

            
        //     if(!$sqlDelIndexRua){
        //         $this -> pdo -> errorInfo();

        //     }else{
        //         echo "Sucesso";
        //     }
            

        // }
        function baixaNoItem($idItem, $quantBaixa){

            $sqlSelectItem = $this -> pdo -> query("SELECT nome FROM itens WHERE id = '{$idItem}'");
            $row = $sqlSelectItem -> rowCount();


            if($row > 0){

                $sqlSelectItem = $this -> pdo -> query("SELECT quantidade FROM itens WHERE id = '{$idItem}'");
                $resultSql = $sqlSelectItem->fetch(PDO::FETCH_ASSOC);

                $qntI = (int)$resultSql['quantidade'];

                if($qntI < $quantBaixa){
                    echo "Quantidade Insuficiente";
                    return true;

                }else{
                    return false;

                }
                
            }else{
                echo "Item não encontrado";
                return true;
            }


        }
        function validaBaixaNoItem($arrayCod, $arrayQuantidade){

            $dataLenght = sizeof($arrayCod);
            $condition = null;

            for($i = 0; $i < $dataLenght ; $i++){

                $lastPass = $this -> baixaNoItem($intCod = (int)$arrayCod[$i], $intQnt = (int)$arrayQuantidade[$i]);

                if($lastPass){
                    
                    $condition = false;
                    break;

                }else{
                    $condition = true;

                }

            }
            return $condition;

        }

        function salvarRegistroSaida($do_setor, $ao_setor, $solicitante, $solicitado, $data, $observacao, $arrayCod, $arrayQuantidade){

            $tipoReg = "Saida";
            $lastPass = $this -> validaBaixaNoItem($arrayCod, $arrayQuantidade);

            if($lastPass){

                $arrayData = array(':tipo_reg' => $tipoReg,
                                   ':do_setor' => $do_setor,
                                   ':ao_setor' => $ao_setor,
                                   ':solicitante' => $solicitante,
                                   ':solicitado' => $solicitado,
                                   ':data_reg' => $data,
                                   ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO registros (tipo_reg, do_setor, ao_setor, func_solicitante, func_solicitado, data_reg, observacao) 
                                                    VALUES (:tipo_reg, :do_setor, :ao_setor, :solicitante, :solicitado, :data_reg, :observacao)");

                $sqlInsert -> execute ($arrayData);
                
                $tipoReg = "Saida";
                $tableLastId = "registros";
                $dataLenght = sizeof($arrayCod);
                $idReg = (int)$this -> getLastId($tableLastId);

                // var_dump($idReg);

                // echo (sizeof($arrayCod));
                // var_dump($arrayCod, $arrayQuantidade);


                for($i = 0; $i < $dataLenght ; $i++){


                    $selectNome = $this -> pdo -> query ("SELECT nome FROM itens WHERE id = $arrayCod[$i]");
                    $resultSqlNome = $selectNome->fetch(PDO::FETCH_ASSOC);

                    $nomeItem = $resultSqlNome['nome'];


                    
                    $arrayData = array(':tipo' => $tipoReg,
                                       ':id_Reg' => $idReg,
                                       ':cod' => $arrayCod[$i],
                                       ':nome' => $nomeItem,
                                       ':qnt' => $arrayQuantidade[$i]);

                    // var_dump($arrayData);
                    $sqlInsert = $this -> pdo -> prepare("INSERT INTO registros_itens (tipo, id_registro, produto, nome, quantidade) 
                                                            VALUES (:tipo, :id_Reg, :cod, :nome, :qnt)");

                    $sqlInsert -> execute ($arrayData);                   

                    // echo "<br>";
                    // var_dump($sqlInsert);      
                    

                    $sqlSelectQnt = $this -> pdo -> query("SELECT quantidade FROM itens WHERE id =  $arrayCod[$i]");
                    $resultSql = $sqlSelectQnt->fetch(PDO::FETCH_ASSOC);

                    $qntI = (int)$resultSql['quantidade'];


                    $newQnt = $qntI - $arrayQuantidade[$i];
                    $sqlUpdateQntItens = $this -> pdo -> query ("UPDATE itens
                                                                SET `quantidade` = '{$newQnt}'                                                     
                                                                WHERE `id` = $arrayCod[$i]");
                    

            }

            echo "Sucesso Saida";

            }else{
               
            }

        }

        function entradaNoItem($idItem, $quantEntrada){

            $sqlSelectItem = $this -> pdo -> query("SELECT nome FROM itens WHERE id = '{$idItem}'");
            $row = $sqlSelectItem -> rowCount();


            if($row > 0){
                return true;   

            }else{
                echo "Item não encontrado";
                return false;

            }


        }
        function validaEntradaNoItem($arrayCod, $arrayQuantidade){
            $tabelaEntrada = "itens";
            $dataLenght = sizeof($arrayCod);
            $condition = null;

            for($i = 0; $i < $dataLenght ; $i++){

                $lastPass = $this -> entradaNoItem($intCod = (int)$arrayCod[$i], $intQnt = (int)$arrayQuantidade[$i]);

                if($lastPass){
                  
                    $condition = true;
                    

                }else{

                    $condition = false;
                    break;

                }

            }
            return $condition;

        }

        function salvarRegistroEntrada($data, $observacao, $arrayCod, $arrayQuantidade){

            // var_dump($data, $observacao, $arrayCod, $arrayQuantidade);

            $tabelaEntrada = "itens";
            $tabelaId = "registros";
            $tipoReg = "Entrada";
      
            $lastPass = $this -> validaEntradaNoItem($arrayCod, $arrayQuantidade);

            if($lastPass){

                $arrayData = array(':tipo_reg' => $tipoReg,
                                   ':data_reg' => $data,
                                   ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO registros (tipo_reg, data_reg, observacao) 
                                                    VALUES (:tipo_reg, :data_reg, :observacao)");

                $sqlInsert -> execute ($arrayData);


                $dataLenght = sizeof($arrayCod);
                $idReg = (int)$this -> getLastId($tabelaId);

                // var_dump($idReg);

                // echo (sizeof($arrayCod));
                // var_dump($arrayCod, $arrayQuantidade);


                for($i = 0; $i < $dataLenght ; $i++){


                    $selectNome = $this -> pdo -> query ("SELECT nome FROM $tabelaEntrada WHERE id = $arrayCod[$i]");
                    $resultSqlNome = $selectNome->fetch(PDO::FETCH_ASSOC);

                    $nomeItem = $resultSqlNome['nome'];


                    
                    $arrayData = array(':tipo' =>  $tipoReg,
                                       ':id_reg' =>  $idReg,
                                       ':cod' => $arrayCod[$i],
                                       ':nome' => $nomeItem,
                                       ':qnt' => $arrayQuantidade[$i]);

                    // var_dump($arrayData);
                    $sqlInsert = $this -> pdo -> prepare("INSERT INTO registros_itens (tipo, id_registro, produto, nome, quantidade) 
                                                            VALUES (:tipo, :id_reg, :cod, :nome, :qnt)");

                    $sqlInsert -> execute ($arrayData);                   

                    // echo "<br>";
                    // var_dump($sqlInsert);      
                    

                    $sqlSelectQnt = $this -> pdo -> query("SELECT quantidade FROM $tabelaEntrada WHERE id =  $arrayCod[$i]");
                    $resultSql = $sqlSelectQnt->fetch(PDO::FETCH_ASSOC);

                    $qntI = (int)$resultSql['quantidade'];


                    $newQnt = $qntI + $arrayQuantidade[$i];
                    $sqlUpdateQntItens = $this -> pdo -> query ("UPDATE $tabelaEntrada
                                                                SET `quantidade` = '{$newQnt}'                                                     
                                                                WHERE `id` = $arrayCod[$i]");
                    

            }

            echo "Sucesso Entrada";

            }else{
               
            }

        }
}
?>