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

    <style>
      .texto{
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 40px;
        margin-right: 40px;
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;    
      }
    </style>

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
                <a href="index.php" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="view/quem_somos.php" class="nav-link text-light">O Hospital</a>
              </li>
              <li class="nav-item">
                <a href="view/servicos.php" class="nav-link text-light">Nossos serviços</a>
              </li>
              <li class="nav-item">
                <a href="view/convenios.php" class="nav-link text-light">Convenios</a>
              </li>
              <li class="nav-item">
                <a href="view/politica_de_privacidade.php" class="nav-link text-light">Politica de privacidade</a>
              </li>
              <li class="nav-item">
                <a href="view/contato.php" class="nav-link text-light">Contato</a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#myModal"><!-- Link que abre a janela modal -->
 
                <span class="btn btn-outline-light ml-4" aria-hidden="true"> Entrar </span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header"><!-- Header do modal -->
                  <h4 class="modal-title">Login</h4><!-- Título -->
              </div>
              <div class="modal-body"><!-- Corpo do modal -->
              <form method="post" action="controller/V_login.php">
                <div class="principal">
                  <input type="text" name="usuario" required="" autocomplete="off">
                  <label>Login</label>
                </div>
                <div class="principal">
                  <input type="password" name="senha" required="" autocomplete="off">
                  <label>Senha</label>
                </div>

                <?php
                if(isset($_SESSION["nao_autenticado"])):
                ?>
                
                <div class="noti">
                  <p> ERRO: Usuário ou senha inválido. </p>
                </div>

                <?php
                endif;
                ?>
                <div>
                  <button type="submit" class="btn-personalizado">Entrar</button>
                </div>
              </form>
              </div>
              
              <div class="modal-footer"><!-- Footer do Modal -->
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                      Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                  </button>                
              </div>
          </div>
      </div>
  </div>
          
    <div class="texto">
				
      <h1>O hospital</h1>
      
      <div style="text-align:center"><img src="../imagens/frente2.jpg" width="40%"></div>
      <br>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi augue, dapibus sit amet gravida vel, condimentum eget turpis. Vivamus mattis ipsum nisl, quis pellentesque neque pretium non. Vestibulum tellus elit, vestibulum non quam vitae, pharetra dictum ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque pharetra eu enim et varius. Suspendisse suscipit augue lectus, mollis bibendum arcu suscipit sit amet. Mauris sed sodales nisl. Vestibulum ultricies eleifend ipsum sed auctor. Mauris vitae eros ut leo euismod varius.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi augue, dapibus sit amet gravida vel, condimentum eget turpis. Vivamus mattis ipsum nisl, quis pellentesque neque pretium non. Vestibulum tellus elit, vestibulum non quam vitae, pharetra dictum ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque pharetra eu enim et varius. Suspendisse suscipit augue lectus, mollis bibendum arcu suscipit sit amet. Mauris sed sodales nisl. Vestibulum ultricies eleifend ipsum sed auctor. Mauris vitae eros ut leo euismod varius.
      </p>

    </div>

  </body>
</html>