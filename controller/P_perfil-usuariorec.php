<?php
include "V_verifica-login.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha3844-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Hospital Goiás</title>
    <link rel="shortcut icon" href="/imagens/logo_tittle.png">

</head>
<body>


    
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
                <a href="P_escalarec.php" class="nav-link text-light">Escalas</a>
              </li>
              <li class="nav-item">
                <a href="P_consulta.php" class="nav-link text-light">Consultas</a>
              </li>
              <li class="nav-item">
                <a href="P_cadastro_Paciente.php" class="nav-link text-light">Cadastro de pacientes</a>
              </li>
              <li class="nav-item">
                <a href="P_perfil-usuariorec.php" class="nav-link text-light">Meu perfil</a>
              </li>
              <li class="nav-item">
                <a href="V_logout.php" class="btn btn-outline-light ml-4">Sair</a>
              </li>
          </div>
       
        </div>
      </nav>
    </header><!--/fim Cabecalho -->
<section class="meio">
    <div class="container" style="min-height: 100%;">
        <div class="row my-3">
            <div class="col-lg-5 col-xl-4 card-profile">
                <div class="card shadow-sm">
                    <div class="card-body" id="card-user">
                        <div class="d-flex justify-content-center">
                            <div class="img-habbo2" id="img-avatar">
                                <img src="../imagens/foto_perfil_hiago.png">
                               
                            </div>
                        </div>
                        <hr>
                        <div class="tab-content mt-4">

                            <div role="tabpanel" class="tab-pane active tab-formatacao" id="page1">

                                <!--SE FOR RECEPCIONISTA-->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>Nome</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['nome']; ?></span>
                                    </div>
                                </div>

                                

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>Cargo:</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['nome_funcao']; ?></span>
                                    </div>
                                </div>

                                

                               

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>CPF:</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['cpf']; ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>Data de Nascimento:</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['Nascimento']; ?></span>
                                    </div>
                                </div>

                        <hr>
                                                <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Funções</th>
                                <th scope="col">   </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <p><strong>Senha:</strong>
                                       <a href="P_alterar-senha-usuarios.php"><span class="badge badge-danger">Alterar</span></a>
                                                             </p>
                                </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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