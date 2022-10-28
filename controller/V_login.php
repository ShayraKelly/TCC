<?php
//Tela de Validação das informações do usuario

session_start();
include('conexao_BD.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: P_index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "SELECT log.nome , fun.nome_funcao FROM login as log INNER JOIN funcionario as fun ON (log.usuario_id = fun.usuario_id)
WHERE log.usuario = '{$usuario}'  AND log.senha = '{$senha}'";

$result = mysqli_query($conexao, $sql);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];

	$_SESSION['nome_funcao'] = $usuario_bd['nome_funcao'];
	if($_SESSION['nome_funcao'] == 'recepcao'){
		header('Location: P_indexrec.php');
	}

	if($_SESSION['nome_funcao'] == 'gestor'){
		header('Location: P_indexadm.php');
	}

	if($_SESSION['nome_funcao'] == 'medico'){
		header('Location: P_indexmed.php');
	}
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: P_login.php');
	exit();
}

?>