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

    <title>Meu Perfil</title>
    <link rel="shortcut icon" href="../imagens/logo_tittle.png">

</head>
<body>


    
<section class="comeco">

<header class="item_comeco">
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
                <a href="indexWeb.php" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="quem_somos.html" class="nav-link text-light">O Hospital</a>
              </li>
              <li class="nav-item">
                <a href="servicos.html" class="nav-link text-light">Nossos serviços</a>
              </li>
              <li class="nav-item">
                <a href="convenios.html" class="nav-link text-light">Convenios</a>
              </li>
              <li class="nav-item">
                <a href="politica_de_privacidade.html" class="nav-link text-light">Politica de privacidade</a>
              </li>
              <li class="nav-item">
                <a href="contato.html" class="nav-link text-light">Contato</a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-outline-light ml-4"><!-- Link que abre a janela modal -->
                Entrar 
                <span  aria-hidden="true"></span></a>
              </li>
            </ul>
          </div>
       
        </div>
      </nav>
    </header><!--/fim Cabecalho -->

<div class="item"><a href="indexWeb.php"><i class="fas fa-home"></i>Início</a></div>
<div class="item"><a href="P_internações-uti_leitosadm.php"><i class="fas fa-th"></i>UTI|Leitos</a></div>
<div class="item"><a href="P_escalamed.php"><i class="fas fa-home"></i>Escala Médicos</a></div>
<div class="item"><a href="P_cadastro_Medico.php"><i class="fas fa-home"></i>Cadastro Médicos</a></div>

<div id="header-user" class="dropdown">
    <div class="user">
        <span class="s-identify">  <?php echo $_SESSION['nome']; ?>
  <i class="fas fa-chevron-down"></i>
  </span>
    </div>
    <ul class="dropdown-menu">
        <li><a><i class="fas fa-user"></i> <?php echo $_SESSION['nome']; ?> | <span class="position"><?php echo $_SESSION['nome_funcao']; ?> </span></a></li>
        <li role="separator" class="divider"></li>
        <li><a href="P_perfil-usuario.php"><i class="far fa-id-card"></i>Meu perfil</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="V_logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
    </ul>
</div>
<nav>


  </form>
        

        </div>

      </nav>
 
</header>
</section>
<br>
<br>
<br>

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
                                
                                <td> <p><strong>Foto de Perfil:</strong>
                                  <a href="#">  <span class="badge badge-danger">Alterar</span></a>
                                                         </p></td>
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
     
<section class="final">
  
  <footer>
    <div class="footer-links">
      <div class="container">
        <a href="P_index.php"><i class="fas fa-home"></i>Início</a>
        <div style="float: right;">
          <a href="P_perfil-usuarioadm.php"><i class="fas fa-sync-alt"></i>Atualizar página</a>
          <a href="P_perfil-usuarioadm.php#" id="up"><i class="fas fa-arrow-up"></i>Subir</a>
        </div>
      </div>
      <script>(function ($) {'use strict';$(function () {$('#up').on('click', function () {$('html, body').stop().animate({scrollTop: 0}, 'medium');});});}(jQuery));</script>
    </div>
  </footer>
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