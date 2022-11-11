<?php
include "V_verifica-login.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha3844-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <title>Tela Inicial</title>
</head>
<body>

<header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a3bbd9;">
        <div class="container">
           
          <a href="#" class="navbar-brand">
            <img src="../imagens/hospital_logo__2_-removebg-preview (1).png" height="85px">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="P_indexrec.php" class="nav-link text-light">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="P_internações-uti_leitosrec.php" class="nav-link text-light">UTI/Leitos</a>
              </li>
              <li class="nav-item">
                <a href="P_escalamed.php" class="nav-link text-light">Escalas</a>
              </li>
              <li class="nav-item">
                <a href="P_agendamento-consulta.php" class="nav-link text-light">Consultas</a>
              </li>
              <li class="nav-item">
                <a href="P_cadastro_Paciente.php" class="nav-link text-light">Cadastro de pacientes</a>
              </li>
              <li class="nav-item">
                <a href="P_perfil-usuario.php" class="nav-link text-light">Meu perfil</a>
              </li>
              <li class="nav-item">
                <a href="V_logout.php" class="btn btn-outline-light ml-4">Sair</a>
              </li>
          </div>
       
        </div>
      </nav>
    </header><!--/fim Cabecalho -->
<section class="meio">

<?php
include('conexao_BD.php');
$sql = mysqli_query($conexao, "SELECT l.id_leitos, p.nome FROM leitos as l LEFT JOIN paciente as p ON (l.id_paciente = p.id) ORDER BY l.id_leitos");

echo "<table style='text-align:center'; border=''>";
    echo "<tr class='listarPaciente'>";
        echo "<td><strong>Quarto | Leito</strong></td>";
        echo "<td><strong>paciente</strong></td>";
        echo "<td><strong>Ocupação</strong></td>";
        echo "</tr>";
while ($listagem = mysqli_fetch_array($sql))
{
    $leitos = $listagem['id_leitos'];
    $nomePaciente = $listagem['nome'];
    $ocupacao = "Ocupado";

        echo "<tr>";
            echo "<td id='dados1'>$leitos</td>";
            echo "<td id='dados2'>$nomePaciente</td>";
            if($nomePaciente == ''){
              echo "<td id='dados3'>Livre</td>";
            }
            if($nomePaciente = $nomePaciente){
              echo "<td id='dados3'>$ocupacao</td>";
            }
        echo "</tr>";
}
echo "</table>";

?>
</section>
    
    
<script>
    
        $(document).ready(function(){

          $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
          });

          $('.menu-btn').click(function(){
            $('.side-bar').addClass('active');
            $('.menu-btn').css("visibility", "hidden");
          });

          $('.close-btn').click(function(){
            $('.side-bar').removeClass('active');
            $('.menu-btn').css("visibility", "visible");
          });

          $('#header-user').click(function(event) {
    $('#header-user').toggleClass('visible');
    event.stopPropagation();
    if ($('#header-notif').hasClass('visible')) {
      $('#header-notif').removeClass('visible');
    }
  });
  $(document).click(function(){
    $("#header-user").removeClass('visible');
    $('#header-notif').removeClass('visible');
  });

        });
    </script>
  
</body>
</html>