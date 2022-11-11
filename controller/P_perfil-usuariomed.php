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
                <a href="P_indexadm.php" class="nav-link text-light">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="P_internações-uti_leitosadm.php" class="nav-link text-light">UTI/Leitos</a>
              </li>
              <li class="nav-item">
                <a href="P_cadastro_Medico.php" class="nav-link text-light">Cadastro Medico</a>
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
    <div class="container" style="min-height: 100%;">
        <div class="row my-3">
            <div class="col-lg-5 col-xl-4 card-profile">
                <div class="card shadow-sm">
                    <div class="card-body" id="card-user">
                        <div class="d-flex justify-content-center">
                            <div class="img-habbo2" id="img-avatar">
                                <img src="imagens/foto_perfil_hiago.png">
                               
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

                                                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-1"><p><strong>Especialização:</strong></p></div>
                                        </div>

                                        <div class="col-6">
                                            <span><?php echo $_SESSION['Especialidade_Med']; ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-1"><p><strong>CRM:</strong></p></div>
                                        </div>

                                        <div class="col-6">
                                            <span><?php echo $_SESSION['crmMedico']; ?></span>
                                        </div>
                                    </div>
                                           <!--Dados dos medicos(as) acaba aqui-->             

                           
                        
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
        
    <div class="col-lg-7 col-xl-8" style="min-width: 390px;">
        <div class="card card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="" role="tab" aria-controls="pills-timeline" aria-selected="true">Linha do tempo</a>
                </li>

              

                <li class="nav-item">
                    <a href="P_postagens-do-usuario.php" target="_blank" class="nav-link">Postagens</a>
                </li>

                
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                                    <ul class="timeline">
                                                                                                            <li>
                                    <div class="timeline-badge secondary"><i class="fas fa-info"></i></div>
                                    <div class="timeline-panel" id="441645">
                                        <div class="timeline-heading">
                                                                                                    <h4 class="timeline-title">Cadastro de paciente</h4>
                                                                                                <p class="text-muted"><i class="fas fa-info-circle"></i> 11 Ago 2022 19:14 por <a href="">hiagocarlos</a></p>
                                        </div>
                                        <div class="timeline-body">
                                            
                                        <p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Luiz Guilherme</p>
                    <p><strong>Indentidade do Paciente:</strong> 1234567</p>
                    <p><strong>CFP do Paciente:</strong> 1234567</p>
                    <p><strong>Data: </strong> 12/08/2022</p>
                    <hr>
                    <br>
        
                                            <div class="timeline-badge secondary"><i class="fas fa-info"></i></div>
                                            <div class="timeline-panel" id="433835">
                                                <div class="timeline-heading">
                                                                                                            <h4 class="timeline-title">Agendamento de consulta</h4>
                                                                                                        <p class="text-muted"><i class="fas fa-info-circle"></i> 11 Ago 2022 19:14 por <a href="">hiagocarlos</a></p>
                                                </div>
                                                <div class="timeline-body">
                                                    
                                                <p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Shaywa</p>
                    <p><strong>Horário: </strong> 14:30</p>
                    <p><strong>Data: </strong> 12/08/2022</p>
				
                                                    <hr>
                                                </div>
                                            </div>
                                        </li>
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