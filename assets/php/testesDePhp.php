<?php
    
    
    require_once 'conexao.php';  

    $u = new Connect();
    $pdo = $u -> Con();








    $arrayC = array(0 => 1,
                    1 => 11);
    $arrayQ = array(0 => 100,
                    1 => 100);

    $lastPass;
    $dataLenght = sizeof($arrayC);

    for($i = 0; $i < $dataLenght ; $i++){

            
        
        $sqlSelectItem = $pdo -> query("SELECT quantidade FROM itens_ruas WHERE id = '{$arrayC[$i]}'");
        $resultSql = $sqlSelectItem->fetch(PDO::FETCH_ASSOC);

        var_dump($arrayC[$i]);
        echo "</br>";
        var_dump($arrayQ[$i]);
        echo "</br>";
        var_dump($resultSql);
        echo "</br>";


        $qntI = (int)$resultSql['quantidade'];

        if($qntI < $arrayQ[$i]){
            $lastPass = true;
            break;

        }else{
            $lastPass = false;

        }
        

    }
    if($lastPass == true){
                    
        echo "Erro";
        return false;

    }else{
        echo "Sucess";
        return true;

    }
    



?>