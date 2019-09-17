<?php 
    
    // require_once 'conexao.php';

    // $u = new Connect();
    // $pdo = $u -> Con();

    // $endereco = 17;

    // $checkVarItem = $pdo -> query ("SELECT quantidade FROM itens WHERE cod_end ='{$endereco}'");
    // $allRegisters = $checkVarItem->fetchAll(PDO::FETCH_ASSOC);

    // $sqlLimiteEnd = $pdo -> query ("SELECT limite_itens FROM enderecos WHERE id ='{$endereco}'");
    // $valuLimiteEnd = $sqlLimiteEnd -> fetch();

    // // $valuLimiteEnd = (int)$valuLimiteEnd;
    // // echo($valuLimiteEnd["limite_itens"]);
    // // var_dump($valuLimiteEnd[0]["limite_itens"]);
    // // var_dump($valuLimiteEnd["limite_itens"]);
    // $valuLimite = (int)$valuLimiteEnd["limite_itens"];

    // var_dump($valuLimite);


    // $limiteItens = 0;

    // foreach($allRegisters as $qntLimite){
    //     $limiteItens += $qntLimite["quantidade"];

    // }

    // var_dump($limiteItens);

    // require("funcoes.php");

    // $u = new Functions();
    // // $action = $_GET['action'];
    // $intF = 17;
    // $intS = 0;
    // $u -> validaQntCadastro($intS,$intF);
    $endereco = 17;
    $arrayCod = array($endereco);
    var_dump($arrayCod);
?>