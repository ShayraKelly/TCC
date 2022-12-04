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

    <title>Hospital Goiás</title>
    <link rel="shortcut icon" href="../imagens/logo_tittle.png">
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
                <a href="P_escalarec.php" class="nav-link text-light">Escalas</a>
              </li>
              <li class="nav-item">
                <a href="P_agendamento-consulta.php" class="nav-link text-light">Consultas</a>
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
   
    <div class="container my-3" style="min-height: 100%;">
        <div id="requerimentos">

            <div class="row">

<div class="col-lg-8 col-md-12">

<div id="form-agendamento" class="selected">

<div class="card mb-3 shadow-sm card-general">

    <div class="card-body">
        <div>
        Formulário de Agendamento de Consultas
        </div>
        <hr>

        <form action="" method="post" class="form-general">
            <input type="hidden" name="_token" value="gm73b4Z9e5M4WyYZRyRjBs170EGBRUjyjKgCnj9Y">                                    <input type="hidden" name="acao" value="3">
            <div class="form-group row">
                <div class="col-md-6">
                    <label>SEU NOME</label>
                    <input type="text" name="usuario" class="form-control" maxlength="50" placeholder="Ex: hiagocarlos" required="">
                </div>

                <div class="col-md-6 spacing">
                    <label>Nome do Paciente</label>
                    <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 spacing">
                    <label>Horário</label>
                    <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                </div>

                <div class="col-md-6 spacing">
                    <label>Medico</label>
                        <input type="text" name="usuario_sofreu_acao"  class="form-control" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 spacing">
                <label>Data</label>
                        <input type="text" name="usuario_sofreu_acao"  class="form-control" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                </div>
                <div class="col-md-6 spacing">
                        <label>Normas</label>
                        <p><span class="badge bg-principal text-white">INFO</span> Ao preencher este
                            requerimento, atesto que li e estou em total acordo com as normas de
                            Cadastro.</p>
                    </div>
</div>
           

            <button class="btn btn-send">Enviar</button>

        </form>
    </div>
</div>
</div> <!-- Fim da div#form-agendamento -->
</div> <!-- Fim da row -->
</div>  <!-- Fim div#requerimentos -->

<div class="card mb-4 shadow-sm" id="442204" style="border-color: #ccc">

    <div class="card-header text-white font-weight-bold bg-primary">
        <span>Agendamento</span> <small>- 11 Ago 2022 19:12:53</small>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3">

                <div style="border: 1px solid #ccc; padding: 25px 18px;">
                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Hiago</a></p>
                   <div class="img-habbo"></div>
                    <hr class="mb-2">
                    <div class="info-usuario">
                        <p><strong>Mensagens:</strong> 1 </p>
                        <p><strong>Cargo:</strong> Téc. em Informatica</p>
                                            </div>

                </div>

            </div>

            <div class="col-md-9">

          
					<p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Luiz Guinherme </p>
                    <p><strong>Horário: </strong> 14:30</p>
                    <p><strong>Data: </strong> 12/08/2022</p>

					<p class="mt-2 font-weight-bold">[x] Li e concordo com as normas de postagem de agendamento.</p>
				

             <!-- [SE O REQUERIMENTO FOR DO TIPO ATUALIZACAO_CRH, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
            
            <hr class="hr">
                <p><strong>Status:</strong>
               <span class="badge badge-danger">Reprovado</span>
                                    </p>

                <p><strong>Usuário responsável:</strong> Gessika </p>
                <p><strong>Motivo:</strong> Nome do paciente errado </p>
                <p class="mb-2"><strong>Data da decisão: </strong>11 Ago 2022 - 19:30:48</p>

                
                                <a href="" class="badge badge-secondary">Cancelar</a>
                                <br>
                                <br>
                                 <!-- [SE O REQUERIMENTO FOR DO TIPO ADM, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
                              <a href="#">        <span  onclick="javascript:abrir('P_aprovar_Agendamento-Consulta.php');" class="badge badge-success">Atualizar</span>  </a>   
                                
                            
            </div>
        </div>

    </div>

</div>

    </section> 

    
<script>
    $(document).ready(function () {
        $('#select-form').on('change', function (e) {
            var optionSelected = $(this).find(':selected');
            var targetID = optionSelected[0].dataset.target;

            // Aplicar classe d-none para div com classe selected
            $('.selected').addClass('d-none');

            // Remover classe selected da div com classe selected
            $('.selected').removeClass('selected');

            // Remover classe d-none para div com id target
            $(targetID).removeClass('d-none');

            // Aplicar classe selected para div com id target
            $(targetID).addClass('selected');
        });
    });

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