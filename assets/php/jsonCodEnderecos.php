<?php 

	require_once 'conexao.php';
	$u = new Connect();
	$pdo = $u -> Con();

 
	// $sqlSelectAll = $pdo -> query ("SELECT concat(id,' - ',identificador,' - ',rua,' - ',lado,' - ',armario,' - ',prateleira) as endereco, id, identificador  FROM enderecos");
	$sqlSelectAll = $pdo -> query ("SELECT * FROM enderecos");
	$allRegisters = $sqlSelectAll -> fetchAll(PDO::FETCH_ASSOC);
	
	echo json_encode($allRegisters);

	

?>