<?php

//Conexão
require_once 'php_action/db_connect.php';

//Sessão
session_start();

if (isset($_SESSION['logado'])) {
    header('location: index.php');
}

//Botão Enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if(isset($_POST['lembrar-senha'])):

		setcookie('email', $email, time()+3600);
		setcookie('senha', md5($senha), time()+3600);
	endif;

	if(empty($email) or empty($senha)):
		$erros[] = "<h6 style=\"font-weight: 100;
        color: rgba(255, 0, 0, 0.678);
        padding: 5px;
        background-color: rgba(255, 0, 0, 0.294);
        border: 1px solid rgba(255, 0, 0, 0.575);
        border-radius: 10px;
        width: 274px;\">
        Campo e-mail/senha não preenchidos
    </h6>";
	else:
		$sql = "SELECT email FROM usu WHERE email = '$email'";
		$res = mysqli_query($connect, $sql);

		if(mysqli_num_rows($res) > 0):
		$senha = md5($senha);
		$sql = "SELECT * FROM usu WHERE senha = '$senha'AND email = '$email'";
		$res = mysqli_query($connect, $sql);

			if(mysqli_num_rows($res) == 1):
				$dados = mysqli_fetch_array($res);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('location: index.php');

			else:
				$erros[] = "<h6 style=\"font-weight: 100;
                color: rgba(255, 0, 0, 0.678);
                padding: 5px;
                background-color: rgba(255, 0, 0, 0.294);
                border: 1px solid rgba(255, 0, 0, 0.575);
                border-radius: 10px;
                width: 219px;\">
                Usuário e senha não conferem
            </h6>";
			endif;
		else:
			$erros[] = "<h6 style=\"font-weight: 100;
            color: rgba(255, 0, 0, 0.678);
            padding: 5px;
            background-color: rgba(255, 0, 0, 0.294);
            border: 1px solid rgba(255, 0, 0, 0.575);
            border-radius: 10px;
            width: 139px;\">
            Usuário inexistente
        </h6>";
		endif;

	endif;

endif;
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="script" href="js/script.js">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>
<body>
<nav style="position:fixed; float: right; width: 100%; z-index: 1; -webkit-box-shadow: 0px 1px 47px 1px rgba(0,0,0,0.21); -moz-box-shadow: 0px 1px 47px 1px rgba(0,0,0,0.21); box-shadow: 0px 1px 47px 1px rgba(0,0,0,0.21); top: 0px;" class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="index.php"><img width="70px;" src="img/logoblack.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Início<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="masculino.php">Masculino</a>
                                <a class="dropdown-item" href="feminino.php">Feminino</a>
                   
                            </div>
                    </li>
                </ul>
                
                <ul class="navbar-nav" style="margin-right: 0px;">
                <?php
                        if(isset($_SESSION['logado'])):
                            echo "<li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"img/logoblack.png\" style=\"width: 50px;\" alt=\"\"></a>
                            <div class=\"dropdown-menu\" style=\"top: 116%; left: -63px;\" aria-labelledby=\"navbarDropdown\">
                            <a class='dropdown-item' href='perfil.php'>Perfil</a>
                                    <a class='dropdown-item' href='ajuda.php'>Dúvidas</a>
                                    <div style='width: 90%; margin: auto;' class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='php_action/logout.php'>Sair</a>";
                        else:
                            echo "<a href=\"login.php\">Login ou cadastre-se</a>";
                        endif;
                  
                        
                        
                        ?>
                </li>
            </ul>
            </div>
        </nav>








            <div class="eologin">
              <div class="login">
                  <h3>Login</h3>
                  <?php
		            if(!empty($erros)):
			            foreach($erros as $erro):
				            echo $erro;
			            endforeach;
		            endif;
                    if(isset($_GET['suce'])):
                        $erro = $_GET['suce'];
                        echo $erro;

                    endif;
		        ?>
              <form action="" method="POST">
                <?php
                if(isset($_GET['comp'])):
                    $comp = $_GET['comp'];
                   $comp2 = "<h6 style=\"font-weight: 100;
                   color: rgba(255, 0, 0, 0.678);
                   padding: 5px;
                   margin-top: 20px;
                   background-color:
                   rgba(255, 0, 0, 0.294);
                   border: 1px solid rgba(255, 0, 0, 0.575);
                   border-radius: 10px;
                   width: 274px;\">
                   $comp
                   </h6>";
                   echo $comp2;
                endif;
                ?>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="emai">Email</label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="senha">Senha</label>
                      <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                    </div>
                    <label style="float: right;">
			 		<input type="checkbox" name="lembrar-senha" checked="checked"/>
			 		    <span>Lembrar-Senha</span>
      			    </label>
                  </div>
                  <button style="width: 100%;" type="submit" name="btn-entrar" class="btn btn-primary">Login</button>
                </form>
                <h6 style="margin-top: 15px;">Ainda não possui uma conta? <a href="cadastrar.php">Cadastre-se</a>!</h6>
              </div>
            </div>     











            <!-- FOOTER DA ANAJULIA -->
       <div class="video" style="text-align: center; border-bottom: 30px;">
            <h3 class="titulo">VEJA NOSSO VÍDEO</h3>
            <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/S5ORftue4T4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br>
        </div>

        <div>
                <div class="divmaior">
                        <div class="divmenor">
                            <div class="lista">
                                <ul>
                                    <img src="img/logo.png" alt="Logo da loja" width="100px" height="49">
                                    <li>Formas de Pagamento</li>
                                    <hr>
                                    <li>Boleto bancário</li>
                                    <li><img src="img/boleto.png" alt="Boleto" width="50px" height="30px"></li>
                      
                                </ul>
            
                            </div>
            
                            <div class="lista">
                                <ul>
                                    <a class="op" href="#"><li>Sobre a Volp</li></a>
                                    <br>
                                    <a class="op" href="#"><li>Ajuda</li></a>
                                    <br>
                                    <a class="op" href="#"><li>Perfil</li></a>
                                    <br>
                                    <a class="op" href="#"><li>Produtos</li></a>
                                    <br>
                                    <a class="op" href="#"><li>Destaques</li></a>
                                </ul>
                            </div>
            
                            <div class="lista">
                                <ul>
                                    <li>Redes Sociais</li>
                                    <hr>
                                    <li>Acompanhe todas as ofertas e novidades do site da Volp</li>
            
                                    <a href="    "><img src="img/face.png" alt="Facebook da loja" width="30px" height="30px"></a>
                                    <a href="    "><img src="img/snap.png" alt="SnapChat" width="30px" height="30px"></a>
                                    <a href="    "><img src="img/t.png" alt="Twitter da loja" width="30px" height="30px"></a>
                                    <a href="    "><img src="img/you tube.png" alt="you Tube da loja" width="30px" height="30px"></a>
                                    <a href="    "><img src="img/gmail.png" alt="gmail da loja" width="30px" height="30px"></a>
                                    <a href="    "><img src="img/in.png" alt="linkedin da loja" width="30px" height="30px"></a>
                                    <a href="    "><img src="img/insta.png" alt="Instagram da loja" width="30px" height="30px"></a>
             
                                    <br><br>
            
                                    <a class="ajuda" href="ajuda.php">Tire suas dúvidas</a>
                                </ul>
                            </div>
                        </div>
                        <div class="cpy">
                            <p>© Copyright 6ixDev 2018 | Todos os direitos reservados</p>
                        </div>
                    </div>











            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
