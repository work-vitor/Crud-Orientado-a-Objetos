<?php
	
	include 'includes/header.php';
	include 'class/class_crud.php';
?>

	<div id="content">

		<table class="tabelaCrud">
			
			<tr>
				<td>Id:</td>
				<td>Nome:</td>
				<td>Sobrenome:</td>
				<td>Nome de Usuário:</td>
				<td>E-mail:</td>
				<td>Sexo:</td>
				<td>Cpf:</td>
				<td>Senha:</td>
				<td>Confirma Senha:</td>
				<td>Ações</td>
			</tr>



			<!-- Estrutura de Loop -->

			<?php

				$Crud=new Classcrud();
				$BFetch=$Crud->selectDB(
					"*",
					"cadastro",
					"",
					array()
				);

				while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
					
			?>

				<tr>
				<td><?php echo $Fetch['id']; ?></td>
				<td><?php echo $Fetch['nome']; ?></td>
				<td><?php echo $Fetch['sobrenome']; ?></td>
				<td><?php echo $Fetch['nome_usu']; ?></td>
				<td><?php echo $Fetch['email']; ?></td>
				<td><?php echo $Fetch['sexo']; ?></td>
				<td><?php echo $Fetch['cpf']; ?></td>
				<td><?php echo $Fetch['senha']; ?></td>
				<td><?php echo $Fetch['conf_senha']; ?></td>

				<td>
             
             <a href="<?php echo "visu.php?id={$Fetch['id']}"; ?>"><img src="https://img.icons8.com/material/24/000000/search.png"></a>
             
             <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><img src="https://img.icons8.com/material/24/000000/edit.png"></a>
             
             <a class="Deletar" href="<?php echo "controller/controllerDeletar.php?id={$Fetch['id']}"; ?>"><img src="https://img.icons8.com/material/24/000000/delete.png"></a>
         </td>

				</tr>

				<?php
					}
				?>

		</table>

	</div>

<?php
	include 'includes/footer.php';
?>