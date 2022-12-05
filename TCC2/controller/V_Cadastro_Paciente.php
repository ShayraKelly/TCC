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

if(empty($_POST['cpfRecepcionista'] == $_SESSION['cpf'])){
	header('Location: P_cadastro_Paciente.php');
	exit();
}

$nomePaciente = mysqli_real_escape_string($conexao, $_POST['nomePaciente']);
$cpfPaciente = mysqli_real_escape_string($conexao, $_POST['cpfPaciente']);
$TelPaciente = mysqli_real_escape_string($conexao, $_POST['telefonePaciente']);
$nascPaciente = mysqli_real_escape_string($conexao, $_POST['dtNascimento']);
$situacao = mysqli_real_escape_string($conexao, $_POST['situacaoPaciente']);
$planoSaude = mysqli_real_escape_string($conexao, $_POST['planoSaude']);
$parente = mysqli_real_escape_string($conexao, $_POST['parentePaciente']);
    $resultNasc =explode('/', $nascPaciente);
    $dia = $resultNasc[0];
    $mes = $resultNasc[1];
    $ano = $resultNasc[2];
//Data Pronta para o Banco de dados
$nascPaciente = $ano."-".$mes."-".$dia;


//Inserção ao Banco de Dados
$sql1 = "INSERT INTO paciente (cpf, nome, telefone, dt_nasc, situacao, plano_saude, parente) VALUES ('{$cpfPaciente}', '{$nomePaciente}', '{$TelPaciente}', '{$nascPaciente}', '{$situacao}', '{$planoSaude}', '{$parente}')";

$result = mysqli_query($conexao, $sql1);

if($result == true){

    $sql2 = mysqli_query($conexao, "SELECT id FROM paciente WHERE cpf = '{$cpfPaciente}'");
    $validar = mysqli_fetch_assoc($sql2);
    $_SESSION['id_pesquisa'] = $validar['id'];

    $sql3 = "INSERT INTO cad_paciente (id_recepcao, id_paciente, dt_cad) VALUES ('{$_SESSION['id_recepcao']}', '{$_SESSION['id_pesquisa']}', NOW())";
    $result2 = mysqli_query($conexao, $sql3);

    if($result2 == true){
        echo "Paciente Cadastrado com Sucesso!!";
        echo "<a href='P_escalarec.php'>Voltar</a>";
    }else {
        echo "Paciente Não Cadastrado!!";
        echo "<a href='P_cadastro_Paciente.php'>Voltar</a>";
    }
} else{
    echo "Opaaa Paciente Não Cadastrado";
    echo "<a href='P_cadastro_Paciente.php'>Voltar</a>";
}

?>