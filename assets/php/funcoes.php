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
            
            $checkVar = $this -> pdo -> query ("SELECT nome FROM itens_ruas WHERE nome ='{$nome}'");
            $row = $checkVar -> rowCount();

            if ($row > 0) {

                $_SESSION["msgValidacaoCad"] = "<div class='alert alert-primary' role='alert'>
                                                    This is a primary alert with 
                                                    <a href='#' class='alert-link'>an example link</a>
                                                    Give it a click if you like.
                                                </div>"; 

                echo $_SESSION['msgValidacaoCad'];
                echo "Cadastro n efetuado";

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

                if(!$sqlInsert){

                    $this -> pdo -> errorInfo();
                }

                echo "Cadastro efetuado";
            }

        }

        function cadItemArmario($nome, $n_armario, $n_andar, $quantidade, $observacao){

            $checkVar = $this -> pdo -> query ("SELECT nome FROM itens_armarios WHERE nome = '{$nome}'");
            $row = $checkVar -> rowCount();

            if ($row > 0) {

                var_dump ($row);

                $_SESSION["msgValidacaoCad"] = "<div class='alert alert-primary' role='alert'>
                                                    This is a primary alert with 
                                                    <a href='#' class='alert-link'>an example link</a>
                                                    Give it a click if you like.
                                                </div>"; 
                echo $_SESSION['msgValidacaoCad'];
                echo "Cadastro n efetuado";
               
               
               
                // // echo"<script type='text/javascript'>alert('Um item com esses dados já se cadastrou. Tente novamente.');window.location.href='cadastro.php';</script>";
                // // header("Location:../../examples/dashboard.php");
                // echo "document.getElementById('ID_DO_ELEMENTO').classList.remove('NOME_DA_CLASSE')";
               
                // echo "function show () {
                //     document.getElementById('msg').style.display = 'block';
                //   }";

            
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

                var_dump($sqlInsert);
                
            }



        }

        function altItemRua($id, $altNome,$altRua, $altLado, $altArmario, $altAndar, $altObservacao){

            // var_dump($id);
            $idPro = (int)$id;
            // echo "<br>";
            var_dump($idPro);
            echo "<br>";


            $sqlSelect = $this -> pdo -> query ("SELECT nome FROM itens_ruas WHERE id = $idPro");
            $row = $sqlSelect -> fetch();

            var_dump($sqlSelect);
            echo "<br>";




            if($row > 0){
                echo "If";
                echo "<br>";


                // $arrayData = array('id' => $id,
                //                    ':altNome' => $altNome,
                //                    ':altRua' => $altRua,
                //                    ':altLado' => $altLado,
                //                    ':altArmario' => $altArmario,
                //                    ':altAndar' => $altAndar,
                //                    ':altObservacao' => $altObservacao);

                $sqlUpdate = $this -> pdo -> query ("UPDATE `itens_ruas` 
                                                       SET `nome` = '{$altNome}',
                                                       `n_rua` = '{$altRua}',
                                                       `lado` = '{$altLado}',
                                                       `n_armario` = '{$altArmario}',
                                                       `n_andar` = '{$altAndar}',
                                                       `observacao` = '{$altObservacao}'
                                                        WHERE `id` = '{$idPro}'");
                var_dump($sqlUpdate);

                // $sqlUpdate -> execute($arrayData);

            }else{
                echo "Else";
            }


        }
        function delIndexRua($idDelIndex){

            $sqlDelIndexRua = $this -> pdo -> query("DELETE FROM `itens_ruas` WHERE id = $idDelIndex");
            header("Location:../../examples/estoque.php");

            
            if(!$sqlDelIndexRua){
                $this -> pdo -> errorInfo();
            }
            

        }

    }
?>