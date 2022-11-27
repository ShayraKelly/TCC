<?php
session_start();
include('conexao_BD.php');
$cpf = $_SESSION['cpf'];

$sql = mysqli_query($conexao, "SELECT log.usuario, log.senha FROM login as log INNER JOIN funcionario as fun ON (log.usuario_id = fun.usuario_id)
WHERE log.usuario_id = '{$_SESSION['usuario_id']}'");

$result = mysqli_fetch_assoc($sql);

$_SESSION['valor_usuario'] = $result['usuario'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Goiás</title>
    <link rel="shortcut icon" href="imagens/logo_tittle.png">
</head>
<body>
<h1>Alterar Senha - usuários</h1>
    <form id="alterar_senha" action="V_alterar-senha-usuarios.php" method="POST">
        <div>
            <h1>Usuario:</h1>
            <h2><?php echo $_SESSION['valor_usuario']; ?></h2>
        </div>
        <div>
            <strong><label>Digite sua nova Senha:</label></strong>
            <input type="password" name="alterarSenha" required placeholder="Insira a Nova Senha!!">
        </div>
        <div>
            <strong><label>Confirme sua nova Senha:</label></strong>
            <input type="password" name="confirmarSenha" required placeholder="Insira a Nova Senha!!">
        </div>
        <button>Alterar Senha</button>
    </form>
</body>
</html>