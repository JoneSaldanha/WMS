<?php
    
    require("conexao.php");

    $u = new Connect();
    $pdo = $u -> Con();

    $altNome ="BCDA";

    $sqlSelect = $pdo -> query ("SELECT id FROM itens_ruas WHERE nome = $altNome");
    $row = $sqlSelect -> rowCount();

    var_dump ($row);
    echo $sqlSelect;
    // var_dump ($sqlSelect);
    // echo $row;
    // var_dump ($row);

    
?>