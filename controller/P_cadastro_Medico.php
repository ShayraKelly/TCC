<?php
include "V_verifica-login.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8" ></script>
  <link rel="stylesheet" type="text/css" href="../view/Sistema.css">
  <link rel="stylesheet" type="text/css" href="../view/style.css"> 
  <script src="biblioteca.js"></script>
  <title>Pagina de Cadastros</title>
</head>
<body>


    
<section class="comeco">

<header class="item_comeco">
         
<a href="P_index.php">
    <div class="item_te">
        <span>Garotos de</span>
            Programa
    </div>
</a>

<div id="header-user" class="dropdown">
    <div class="user">
        <span class="s-identify">  <?php echo $_SESSION['nome']; ?>
  <i class="fas fa-chevron-down"></i>
  </span>
    </div>
    <ul class="dropdown-menu">
        <li><a><i class="fas fa-user"></i> <?php echo $_SESSION['nome']; ?> | <span class="position">Téc. em Informatica</span></a></li>
        <li role="separator" class="divider"></li>
        <li><a href="P_perfil-usuario.php"><i class="far fa-id-card"></i>Meu perfil</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="V_logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
    </ul>
</div>

<nav>

<div class="menu-btn">
  <i class="fas fa-bars"></i>
</div>
<div class="side-bar">
  <div class="close-btn">
    <i class="fas fa-times"></i>
  </div>
  <div class="menu">
  <form class="search-container">
          <div class="input-group" style="padding: 15px 10px 15px 10px;">
          <input type="text" id="procurar_usuario"  class="form-control"placeholder="Pesquisar usuario" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-info" id="procurar_user"><i class="fas fa-search"></i></button>
                </div>
            </div>

    
</form>
  <br>
            <div class="item"><a href="P_indexadm.php"><i class="fas fa-home"></i>Inicio</a></div>
            <div class="item"><a href="P_internações-uti_leitosadm.php"><i class="fas fa-th"></i>UTI/Leitos</a></div>
            <div class="item"><a href="P_cadastro_Medico.php"><i class="fas fa-home"></i>Cadastro Medico</a></div>
         
          </div>
        </div>

    </nav>

 
</header>
</section>
<br>
<br>
<br>
<br>


<section class="meio">
<div class="container my-3" style="min-height: 100%;">
        <div id="requerimentos">

            <div class="row">

                <div class="col-lg-4 col-md-12">

                    <div class="card card-general shadow-sm">

                        <div class="card-title">
                            <span>Instruções</span>
                        </div>

                        <div class="card-body">
                            <p>1. Selecione o formulário</p>

                            <select name="" id="select-form" class="custom-select my-3">
                              
                                <option data-target="#form-cadastro-medico">01 - Formulário de Cadastro de Medico
                                </option>
                                <!-- FORMULÁRIO QUE SO ADM CONSEGUE VER-->
                                <option data-target="#form-atualizacao">02 - Atualizar
                                </option>
                               <!-- ATÉ AQUI-->
                               
                            </select>

                            <p>2. Preencha o formulário</p>
                            <p>3. Envie (:</p>
                        </div>

                    </div>

                </div>
                <div class="col-lg-8 col-md-12">



<div id="form-cadastro-medico" class="selected">

    <div class="card mb-3 shadow-sm card-general">
        <div class="card-title">
            <span>Formulário de Cadastro de Medico</span>
        </div>

        <div class="card-body">
            <div>
                Utilize este formulário para postar o cadastro de Medicoss.
            </div>
            <hr>

            <form action="" method="post" class="form-general">
                <input type="hidden" name="_token" value="">                                    <input type="hidden" name="acao" value="4">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Seu nome</label>
                        <input type="text" name="usuario_promoveu_acao" class="form-control" maxlength="50" placeholder="Ex: hiagocarlos" required="">
                    </div>

                    <div class="col-md-6 spacing">
                        <label>nome completo do medico</label>
                        <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6 spacing">
                        <label>Especialidade</label>
                        <select class="form-control" name="id_patente">
                            <option value="1">Cardiologista</option>
                            <option value="2">Oftalmologista</option>
                            <option value="3">Psiquiatra</option>
                            
                        </select>
                    </div>

                    <div class="col-md-6 spacing">
                        <label>IDENTIDADE</label>
                        <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6 spacing">
                        <label>CPF</label>
                        <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                       
                    </div>

                    <div class="col-md-6 spacing">
                        <label>CRM</label>
                        <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-md-6 spacing">
                        <label>Data de nascimento</label>
                        <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
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

</div>



<!-- FORMULÁRIO QUE SO ADM CONSEGUE VER-->
<div id="form-atualizacao" class="d-none">

    <div class="card mb-3 shadow-sm card-general">
        <div class="card-title">
            <span>Formulário De Atualização</span>
        </div>

        <div class="card-body">
            <div>
                Utilize este formulário para postar as atualizações feitas.
            </div>
            <hr>

            <form action="" method="post" class="form-general">
                <input type="hidden" name="_token" value="">                                    <input type="hidden" name="acao" value="4">
               

                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Membro do C.R.H responsável pela atualização:</label>
                        <input type="text" name="usuario_promoveu_acao" class="form-control" maxlength="50" placeholder="Ex: hiagocarlos" required="">
                    </div>

                    <div class="col-md-6 spacing">
    <label>Mensagem</label>
    <select class="form-control" name="id_patente">
        <option value="1">Atualização Realizada!</option>
       
        
    </select>
</div>

                

                    <div class="col-md-6 spacing">
                        <label>Normas</label>
                        <p><span class="badge bg-principal text-white">INFO</span> Ao preencher este
                            requerimento, atesto que li e estou em total acordo com as normas de
                            rebaixamento.</p>
                    </div>
                    
                </div>
                <div class="form-group row">


                <button class="btn btn-send">Enviar</button>

            </form>
        </div>
    </div>

</div>


</div> <!-- Fim col-md-8 -->
</div> <!-- Fim da row -->
</div> <!-- Fim da div#requerimentos -->

<div class="card mb-4 shadow-sm" id="442204" style="border-color: #ccc">

    <div class="card-header text-white font-weight-bold bg-primary">
        <span>Cadastro de Medico</span> <small>- 11 Ago 2022 20:00:53</small>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3">

                <div style="border: 1px solid #ccc; padding: 10px 18px;">
                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Ana Luiza</a></p>
                    <div class="img-habbo"></div>
                    <hr class="mb-2">
                    <div class="info-usuario">
                        <p><strong>Mensagens:</strong> 1 </p>
                        <p><strong>Cargo:</strong> Gerente</p>
                                            </div>

                </div>

            </div>

            <div class="col-md-9">

          
					<p class="mb-3"><span style="text-decoration: underline;">  Ana Luiza</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Gerente Ana Luiza </p>
					<p><strong>Nome do Medico(a): </strong> Igor Guerra</p>
                    <p><strong>Especialidade:</strong> Cardiologista</p>
                    <p><strong>Indentidade do Medico(a):</strong> 1234567</p>
                    <p><strong>CFP do Medico:</strong> 123.456.789.00</p>
                    <p><strong>CRM:</strong> GO 123456</p>
                    <p><strong>Data de Nascimento: </strong> 12/08/2022</p>

					<p class="mt-2 font-weight-bold">[x] Li e concordo com as normas de postagem de agendamento.</p>
				

            <!-- [SE O REQUERIMENTO FOR DO TIPO ATUALIZACAO_CRH, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
            
            <hr class="hr">
                <p><strong>Status:</strong>
                <span class="badge badge-success">Aprovado</span>
                                    </p>

                <p><strong>Usuário responsável:</strong> Gessika </p>
                <p><strong>Motivo:</strong> De acordo com o requerimento</p>
                <p class="mb-2"><strong>Data da decisão: </strong>11 Ago 2022 - 18:37:48</p>

                
                                <a href="" class="badge badge-secondary">Cancelar</a>
                                <br>
                                <br>
                                 <!-- [SE O REQUERIMENTO FOR DO TIPO ADM, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
                              <a href="#">        <span  onclick="javascript:abrir('P_aprovar_Cadastro_Medico.php');" class="badge badge-success">Atualizar</span>  </a>   
                            
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
          <a href="P_requerimento-cadastros.php"><i class="fas fa-sync-alt"></i>Atualizar página</a>
          <a href="P_requerimento-cadastros.php#" id="up"><i class="fas fa-arrow-up"></i>Subir</a>
        </div>
      </div>
      <script>(function ($) {'use strict';$(function () {$('#up').on('click', function () {$('html, body').stop().animate({scrollTop: 0}, 'medium');});});}(jQuery));</script>
    </div>
    <div class="footer-credits">
      <div class="container">
        <div class="credits">
          <div class="clearfix"></div>
          <i class="fas fa-code"></i>Desenvolvido por: Garotos de Programa<br>
          <i class="fas fa-paint-brush"></i>Desenhado por: Hiago Carlos<br>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </footer>
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