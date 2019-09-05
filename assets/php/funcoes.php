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


        function returnItensArmarios(){

            $sqlSelectAll = $this -> pdo -> query ("SELECT * FROM itens_armarios");
            $allRegisters = $sqlSelectAll -> fetchAll(PDO::FETCH_ASSOC);

            // var_dump ($allRegisters);
            return $allRegisters;
            
        }
        
        public function returnItensRuas(){

            $sqlSelectAll = $this-> pdo-> query ("SELECT * FROM itens_ruas");         
            $allRegisters = $sqlSelectAll->fetchAll(PDO::FETCH_ASSOC);

            // var_dump($allRegisters);
            return $allRegisters;
        }
        public function listItensReg($idReg){

            $idRegistro = (int)$idReg;

            $sqlSelectAll = $this-> pdo-> query ("SELECT * FROM registros_itens WHERE id_registro = $idRegistro");         
            $allRegisters = $sqlSelectAll->fetchAll(PDO::FETCH_ASSOC);

            // var_dump($allRegisters);
            echo json_encode($allRegisters);
        }


        function cadItemRua($nome, $n_rua, $lado, $n_prateleira, $n_andar, $quantidade, $observacao) {
            
            $checkVar = $this -> pdo -> query ("SELECT id FROM itens_ruas WHERE nome ='{$nome}'");
            $row = $checkVar -> rowCount();

            if ($row > 0) {

                echo "Erro";

                // header("Location:../../examples/dashboard.php");

            } else {

                $arrayData = array(':nome' => $nome,
                                ':n_rua' => $n_rua,
                                ':lado' => $lado,                    
                                ':n_prateleira' => $n_prateleira,
                                ':n_andar' => $n_andar,
                                ':quantidade' => $quantidade,
                                ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO itens_ruas (nome, n_rua, lado, n_prateleira, n_andar, quantidade, observacao) 
                                                    VALUES (:nome, :n_rua, :lado, :n_prateleira, :n_andar, :quantidade, :observacao)");                                   
                $sqlInsert -> execute($arrayData);

                echo "Sucesso";
            }

        }

        function cadItemArmario($nome, $n_armario, $n_andar, $quantidade, $observacao){

            $checkVar = $this -> pdo -> query ("SELECT id FROM itens_armarios WHERE nome = '{$nome}'");
            $row = $checkVar -> rowCount();

            if ($row > 0) {

                echo "Erro";

            }else{

                $arrayData = array(':nome' => $nome,
                                ':n_armario' => $n_armario,
                                ':n_andar' => $n_andar,
                                ':quantidade' => $quantidade,
                                ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO itens_armarios (nome, n_armario, n_andar, quantidade, observacao) 
                                                    VALUES (:nome, :n_armario, :n_andar, :quantidade, :observacao)");
                
                $sqlInsert -> execute ($arrayData);
            
                if(!$sqlInsert){

                    $this -> pdo -> errorInfo();
                }

                echo "Sucesso";
                
            }



        }

        function altItemRua($id, $altNome,$altRua, $altLado, $altPrateleira, $altAndar, $altObservacao){

            $idPro = (int)$id;

            // $sqlSelect = $this -> pdo -> query ("SELECT id FROM itens_ruas WHERE nome = $altNome");
            // $row = $sqlSelect -> fetch();

            // if($row+1 > 1){
                
            //     echo "Erro";

            // }else{

                $sqlUpdate = $this -> pdo -> query ("UPDATE `itens_ruas` 
                                                       SET `nome` = '{$altNome}',
                                                       `n_rua` = '{$altRua}',
                                                       `lado` = '{$altLado}',
                                                       `n_prateleira` = '{$altPrateleira}',
                                                       `n_andar` = '{$altAndar}',
                                                       `observacao` = '{$altObservacao}'
                                                        WHERE `id` = '{$idPro}'");
                echo "Sucesso";

                // $sqlUpdate -> execute($arrayData);

            // }


        }
        
        function altItemArmario($id, $altNome, $altArmario, $altAndar, $altObservacao){

            $idPro = (int)$id;

            // $sqlSelect = $this -> pdo -> query ("SELECT id FROM itens_ruas WHERE nome = $altNome");
            // $row = $sqlSelect -> fetch();

            // if($row+1 > 1){
                
            //     echo "Erro";

            // }else{

            $sqlUpdate = $this -> pdo -> query ("UPDATE `itens_armarios` 
                                                    SET `nome` = '{$altNome}',
                                                    `n_armario` = '{$altArmario}',
                                                    `n_andar` = '{$altAndar}',
                                                    `observacao` = '{$altObservacao}'
                                                    WHERE `id` = '{$idPro}'");
            echo "Sucesso";

                // $sqlUpdate -> execute($arrayData);

            // }


        }
        function delIndexRua($idDelIndex){

            $sqlDelIndexRua = $this -> pdo -> query("DELETE FROM `itens_ruas` WHERE id = $idDelIndex");
            header("Location:../../examples/estoque.php");

            
            if(!$sqlDelIndexRua){
                $this -> pdo -> errorInfo();

            }else{
                echo "Sucesso";
            }
            

        }
        function delIndexArmario($idDelIndex){

            $sqlDelIndexRua = $this -> pdo -> query("DELETE FROM `itens_armarios` WHERE id = $idDelIndex");
            header("Location:../../examples/estoque.php");

            
            if(!$sqlDelIndexRua){
                $this -> pdo -> errorInfo();

            }else{
                echo "Sucesso";
            }
            

        }
        function baixaNoItem($tabelaBaixa, $idItem, $quantBaixa){

            $sqlSelectItem = $this -> pdo -> query("SELECT nome FROM $tabelaBaixa WHERE id = '{$idItem}'");
            $row = $sqlSelectItem -> rowCount();


            if($row > 0){

                $sqlSelectItem = $this -> pdo -> query("SELECT quantidade FROM $tabelaBaixa WHERE id = '{$idItem}'");
                $resultSql = $sqlSelectItem->fetch(PDO::FETCH_ASSOC);

                $qntI = (int)$resultSql['quantidade'];

                if($qntI < $quantBaixa){
                    return true;

                }else{
                    return false;

                }
                
            }else{
                return true;
            }


        }
        function validaBaixaNoItem($tabelaBaixa, $arrayCod, $arrayQuantidade){

            $dataLenght = sizeof($arrayCod);
            $condition = null;

            for($i = 0; $i < $dataLenght ; $i++){

                $lastPass = $this -> baixaNoItem($tabelaBaixa, $intCod = (int)$arrayCod[$i], $intQnt = (int)$arrayQuantidade[$i]);

                if($lastPass){
                    
                    $condition = false;
                    break;

                }else{
                    $condition = true;

                }

            }
            return $condition;

        }

        function salvarRegistro($tabelaBaixa, $do_setor, $ao_setor, $solicitante, $solicitado, $data, $observacao, $arrayCod, $arrayQuantidade){


            $tabelaId = "registros";
      
            $lastPass = $this -> validaBaixaNoItem($tabelaBaixa, $arrayCod, $arrayQuantidade);

            if($lastPass){

                $arrayData = array(':do_setor' => $do_setor,
                                ':ao_setor' => $ao_setor,
                                ':solicitante' => $solicitante,
                                ':solicitado' => $solicitado,
                                ':data_reg' => $data,
                                ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO registros (do_setor, ao_setor, func_solicitante, func_solicitado, data_reg, observacao) 
                                                    VALUES (:do_setor, :ao_setor, :solicitante, :solicitado, :data_reg, :observacao)");

                $sqlInsert -> execute ($arrayData);


                $dataLenght = sizeof($arrayCod);
                $idReg = (int)$this -> getLastId($tabelaId);

                // var_dump($idReg);

                // echo (sizeof($arrayCod));
                // var_dump($arrayCod, $arrayQuantidade);


                for($i = 0; $i < $dataLenght ; $i++){

                    
                    $arrayData = array(':id_Reg' =>  $idReg,
                                        ':cod' => $arrayCod[$i],
                                        ':qnt' => $arrayQuantidade[$i]);

                    // var_dump($arrayData);
                    $sqlInsert = $this -> pdo -> prepare("INSERT INTO registros_itens (id_registro, produto, quantidade) 
                                                            VALUES (:id_Reg, :cod, :qnt)");

                    $sqlInsert -> execute ($arrayData);                   

                    // echo "<br>";
                    // var_dump($sqlInsert);      
                    

                    $sqlSelectQnt = $this -> pdo -> query("SELECT quantidade FROM $tabelaBaixa WHERE id =  $arrayCod[$i]");
                    $resultSql = $sqlSelectQnt->fetch(PDO::FETCH_ASSOC);

                    $qntI = (int)$resultSql['quantidade'];


                    $newQnt = $qntI - $arrayQuantidade[$i];
                    $sqlUpdateQntItens = $this -> pdo -> query ("UPDATE $tabelaBaixa
                                                                SET `quantidade` = '{$newQnt}'                                                     
                                                                WHERE `id` = $arrayCod[$i]");
                    

            }

            echo "Sucesso";

            }else{
                echo "Erro";
            }

        }
}
?>