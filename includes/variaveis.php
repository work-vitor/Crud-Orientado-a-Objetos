<?php

	//ID

	if (isset($_POST['id'])) {
		$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['id'])) {
		$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$id = 0;
	}

	if (isset($_POST['Acao'])) {
		$Acao = filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['Acao'])) {
		$Acao = filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$Acao = "";
	}


	//Nome

	if (isset($_POST['nome'])) {
		$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['nome'])) {
		$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$nome = "";
	}

	//Sobrenome

	if (isset($_POST['sobrenome'])) {
		$sobrenome = filter_input(INPUT_POST,'sobrenome',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['sobrenome'])) {
		$sobrenome = filter_input(INPUT_GET,'sobrenome',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$sobrenome = "";
	}

	//Sexo

	if (isset($_POST['sexo'])) {
		$sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['sexo'])) {
		$sexo = filter_input(INPUT_GET,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$sexo = "";
	}

	//Nome de usuário
	if (isset($_POST['nomu'])) {
		$nome_usuario = filter_input(INPUT_POST,'nomu',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['nomu'])) {
		$nome_usuario = filter_input(INPUT_GET,'nomu',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$nome_usuario = "";
	}
	

	//Email

	if (isset($_POST['email'])) {
		$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['email'])) {
		$email = filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$email = "";
	}

	//Cpf

	if (isset($_POST['cpf'])) {
		$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['cpf'])) {
		$cpf = filter_input(INPUT_GET,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$cpf = "";
	}

	//Senha

	if (isset($_POST['senha'])) {
		$senha = md5(filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS));
	}

	elseif (isset($_GET['senha'])) {
		$senha = md5(filter_input(INPUT_GET,'senha',FILTER_SANITIZE_SPECIAL_CHARS));
	}
	else{
		$senha = "";
	}

	//Confirma Senha

	if (isset($_POST['confirma'])) {
		$conf_senha = md5(filter_input(INPUT_POST,'confirma',FILTER_SANITIZE_SPECIAL_CHARS));
	}

	elseif (isset($_GET['confirma'])) {
		$conf_senha = md5(filter_input(INPUT_GET,'confirma',FILTER_SANITIZE_SPECIAL_CHARS));
	}
	else{
		$conf_senha = "";
	}


?>

