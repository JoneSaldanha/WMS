<?php 

    require_once 'conexao.php';


    class Functions{   
           
        Private $u;
        Private $pdo;

        public function __construct(){

            $this -> u = new Connect();
            $this -> pdo = $this -> u -> Con();

        }

        
        // Private function getLastId($tabela){

        //     $sqlSelect = $this -> pdo -> prepare ("SELECT MAX(id) as id FROM $tabela");
        //     $sqlSelect -> execute();
        //     $lastId = $sqlSelect -> fetch();
            
        //     $id = $lastId['id'];

        //     return $id++;

        // }


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

        function cadItemRua($nome, $n_rua, $lado, $n_armario, $n_andar, $quantidade, $observacao) {
            
            $checkVar = $this -> pdo -> query ("SELECT id FROM itens_ruas WHERE nome ='{$nome}'");
            $row = $checkVar -> rowCount();

            if ($row > 0) {

                echo "Erro";

                // header("Location:../../examples/dashboard.php");

            } else {

                $arrayData = array(':nome' => $nome,
                                ':n_rua' => $n_rua,
                                ':lado' => $lado,                    
                                ':n_armario' => $n_armario,
                                ':n_andar' => $n_andar,
                                ':quantidade' => $quantidade,
                                ':observacao' => $observacao);

                $sqlInsert = $this -> pdo -> prepare("INSERT INTO itens_ruas (nome, n_rua, lado, n_armario, n_andar, quantidade, observacao) 
                                                    VALUES (:nome, :n_rua, :lado, :n_armario, :n_andar, :quantidade, :observacao)");                                   
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

        function altItemRua($id, $altNome,$altRua, $altLado, $altArmario, $altAndar, $altObservacao){

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
                                                       `n_armario` = '{$altArmario}',
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

    }
?>