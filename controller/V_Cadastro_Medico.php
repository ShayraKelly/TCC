<?php
//Tela de Validação das informações do usuario

use LDAP\Result;

session_start();
include('conexao_BD.php');

/*
cpfGestao
NomeMedico
Especialidade
cpf
crm
Nascimento
*/

if(empty($_POST['cpfGestao']) || empty($_POST['cpf']) || empty($_POST['crm'])){
	header('Location: P_cadastro_Medico.php');
	exit();
}

$nomeMed = mysqli_real_escape_string($conexao, $_POST['NomeMedico']);
$crmMed = mysqli_real_escape_string($conexao, $_POST['crm']);
$cpfMed = mysqli_real_escape_string($conexao, $_POST['cpf']);
$especialidade = mysqli_real_escape_string($conexao, $_POST['Especialidade']);
$salarioMed = mysqli_real_escape_string($conexao, $_POST['salario']);
$cpfGestao = mysqli_real_escape_string($conexao, $_POST['cpfGestao']);
$nascimentoMed = mysqli_real_escape_string($conexao, $_POST['Nascimento']);
    $resultNasc =explode('/', $nascimentoMed);
    $dia = $resultNasc[0];
    $mes = $resultNasc[1];
    $ano = $resultNasc[2];
//Data Pronta para o Banco de dados
$nascimentoMed = $ano."-".$mes."-".$dia;


//Inserção ao Banco de Dados
$sql1 = "INSERT INTO funcionario (cpf, nome, nome_funcao, dt_nasc, salario, id_hospital) VALUES ('{$cpfMed}', '{$nomeMed}', 'Médico', '{$nascimentoMed}', '{$salarioMed}', 1)";

$sql2 = "INSERT INTO medico (crm, cpf, especialidade) VALUES ('{$crmMed}', '{$cpfMed}', '{$especialidade}')";

$sql3 = "INSERT INTO administricao_med (cpf_adm, crm_med) VALUES ('{$cpfGestao}', '{$crmMed}')";

$result1 = mysqli_query($conexao, $sql1);
$result2 = mysqli_query($conexao, $sql2);
$result3 = mysqli_query($conexao, $sql3);

if($result1 == true || $result2 == true || $result3 == true) {
	
	echo "Médico Cadastrado com Sucesso";
    echo "<a href='P_cadastro_usuario.php'>Cadastrar Usuario</a>";
} else {
    echo "Médico Não Cadastrado";
    echo "<a href='P_cadastro_Medico.php'>Voltar</a>";
}

?>