
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha3844-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Hospital Goiás</title>
    <link rel="shortcut icon" href="imagens/logo_tittle.png">

  <style>
    
  </style>

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
                <a href="P_indexmed.php" class="nav-link text-light">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="P_internações-uti_leitosmed.php" class="nav-link text-light">UTI/Leitos</a>
              </li>
              <li class="nav-item">
                <a href="P_escalamed.php" class="nav-link text-light">Escalas</a>
              </li>
              <li class="nav-item">
                <a href="P_listagem-paciente.php" class="nav-link text-light">Pacientes</a>
              </li>
              <li class="nav-item">
                <a href="P_perfil-usuarioMed.php" class="nav-link text-light">Meu perfil</a>
              </li>
              <li class="nav-item">
                <a href="V_logout.php" class="btn btn-outline-light ml-4">Sair</a>
              </li>
          </div>
       
        </div>
      </nav>
    </header><!--/fim Cabecalho -->
  
<section class="meio">

<br>

<?php
include('conexao_BD.php');
$sql = mysqli_query($conexao, "SELECT esc.id, fun.nome, med.crm, esc.hr_inicio, esc.hr_fim, esc.dia_semana
FROM funcionario as fun INNER JOIN medico as med ON (fun.cpf = med.cpf) INNER JOIN escala_med as em ON (med.crm = em.crm_med)
INNER JOIN escala as esc ON (em.id_escala = esc.id) order by esc.id");

echo "<table style='text-align:center;'  border>";
    echo "<tr  style='padding:10px;'>";
        echo "<td style='padding:10px; width:300px'><strong>Médico</strong></td>";
        echo "<td style='padding:10px; width:300px'><strong>CRM - Médico</strong></td>";
        echo "<td style='padding:10px; width:300px'><strong>Dia da Semana</strong></td>";
        echo "<td style='padding:10px; width:300px'><strong>Horário - Entrada</strong></td>";
        echo "<td style='padding:10px; width:300px'><strong>Horário - Saída</strong></td>";
        echo "</tr>";
while ($listagem = mysqli_fetch_array($sql))
{
    $nome = $listagem['nome'];
    $crm = $listagem['crm'];
    $hr_inicio = $listagem['hr_inicio'];
    $hr_fim = $listagem['hr_fim'];
    $dia = $listagem['dia_semana'];

        echo "<tr>";
            echo "<td  style='padding:10px; width:300px'>$nome</td>";
            echo "<td  style='padding:10px; width:300px'>$crm</td>";
            echo "<td  style='padding:10px; width:300px'>$dia</td>";
            echo "<td  style='padding:10px; width:300px'>$hr_inicio</td>";
            echo "<td  style='padding:10px; width:300px'>$hr_fim</td>";
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