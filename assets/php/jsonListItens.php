<?php 

	require_once 'conexao.php';
	$u = new Connect();
	$pdo = $u -> Con();

 
	$sqlSelectAll = $pdo -> query ("SELECT * FROM itens");
	$allRegisters = $sqlSelectAll -> fetchAll(PDO::FETCH_ASSOC);
	
	echo json_encode($allRegisters);

?>