<?php
	
	include 'class/class_crud.php';

	//Edição de dados
	if (isset($_GET['id'])) {
		$Acao = "Editar";

		$Crud = new Classcrud();
		$BFetch=$Crud->selectDB("*","cadastro","where id=?",array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $id=$Fetch['id'];
        $nome=$Fetch['nome'];
        $sobrenome=$Fetch['sobrenome'];
        $nome_usuario=$Fetch['nome_usu'];
        $email=$Fetch['email'];
        $sexo=$Fetch['sexo'];
        $cpf=$Fetch['cpf'];
        $senha=$Fetch['senha'];
        $conf_senha=$Fetch['conf_senha'];
	}

	//Cadastro novo
	else{
		$Acao = "Cadastrar";
		$id="";
        $nome="";
        $sobrenome="";
        $nome_usuario="";
        $email="";
        $sexo="";
        $cpf="";
        $senha="";
        $conf_senha="";	
	}

?>

<div class="OKAY">
			
		</div>

		<div class="formulario">
			
			<h1 class="center">Cadastro</h1>

			<!--Formulário-->
		<form name="FormCadastro" id="FormCadastro" method="POST" action="controller/controllerCadastro.php">

			<input type="hidden" name="Acao" id="Acao" value="<?php echo $Acao; ?>">
			<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

			<div class="FormInput">
				
				Nome: <br>
				<input type="text" name="nome" value="<?php echo $nome; ?>">
			
			</div>
				
			<div class="FormInput">
				
				Sobrenome: <br>
				<input type="text" name="sobrenome" value="<?php echo $sobrenome; ?>">
			
			</div>

			<div class="FormInput">
				
				Nome de usuário: <br>
				<input type="text" name="nomu" value="<?php echo $nome_usuario; ?>">
			
			</div>

			<div class="FormInput">
				
				Sexo: <br>
				<select name="sexo" id="sexo" >
					
					<option value="">Selecione</option>
					<option value="Masculino">Masculino</option>
					<option value="Feminino">Feminino</option>

				</select>
			
			</div>

			<div class="FormInput">
				
				email: <br>
				<input type="email" name="email" value="<?php echo $email; ?>">
			
			</div>

			<div class="FormInput">
				
				Cpf: <br>
				<input type="number" name="cpf" value="<?php echo $cpf; ?>">
			
			</div>

			<div class="FormInput">
				
				Senha: <br>
				<input type="password" name="senha" placeholder="Senha">
			
			</div>
			
			<div class="FormInput">
				
				Confirmar Senha: <br>
				<input type="password" name="confirma" placeholder=" Confirmar Senha">

			
			</div>

			<div class="FormInput FormInputinput100 center">
				
				<input type="submit" value="Cadastrar
				">
			
			</div>

		</form>

			</div>


		</div>
