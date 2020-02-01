<?php

	include '../class/class_crud.php';

	$Crud= new Classcrud();
	$idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

	$Crud->deleteDB(
    "cadastro",
    "Id=?",
    array(
       $idUser
    )
);

echo "Dado deletado com sucesso!";










?>