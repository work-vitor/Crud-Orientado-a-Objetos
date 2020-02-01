<?php
	include 'includes/header.php';
	include 'class/class_crud.php';
?>

	<div id="content">
		<?php 

			$Crud= new Classcrud();
			$idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS); 
			$BFetch=$Crud->selectDB(
				"*",
				"cadastro",
				"where id=?",
				array($idUser)

			);

			$Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);

		?>	
		<h1>Dados do Usuário</h1>

		<hr>

		<strong>Nome:</strong><?php echo $Fetch['nome']; ?> <br>
		
		<strong>Sobrenome:</strong><?php echo $Fetch['sobrenome']; ?> <br>
		
		<strong>Nome de Usuário:</strong><?php echo $Fetch['nome_usu']; ?> <br>
		
		<strong>E-mail:</strong><?php echo $Fetch['email']; ?> <br>
		
		<strong>Sexo:</strong><?php echo $Fetch['sexo']; ?> <br>
		
		<strong>Cpf:</strong><?php echo $Fetch['cpf']; ?> <br>
		
		<strong>Senha:</strong><?php echo $Fetch['senha']; ?> <br>
		
		<strong>Confirmar Senha:</strong><?php echo $Fetch['conf_senha']; ?> <br>

	</div>

<?php
	include 'includes/footer.php';
?>