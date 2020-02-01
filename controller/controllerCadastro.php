<?php

include ("../includes/variaveis.php");
include("../class/class_crud.php");

$Crud=new Classcrud();

if ($Acao=='Cadastrar') {
	$Crud->insertDB(
		"cadastro",
		"?,?,?,?,?,?,?,?,?",
		array(
			$id,
			$nome,
			$sobrenome,
			$nome_usuario,
			$email,
			$senha,
			$conf_senha,
			$cpf,
			$sexo
		)
	);

	echo "Cadastro realizado com sucesso";

}else{
	$Crud->updateDB(
            "cadastro",
            "nome=?,sobrenome=?,nome_usu=?,email=?,senha=?,conf_senha=?,cpf=?,sexo=?",
            "id=?",
            array(
				$nome,
				$sobrenome,
				$nome_usuario,
				$email,
				$senha,
				$conf_senha,
				$cpf,
				$sexo,
				$id
            )
        );
        echo "Cadastro Editado com Sucesso!";

}


