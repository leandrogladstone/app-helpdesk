<?php

	session_start();

	//Estamos trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//implod("#", $POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#'.  $descricao . PHP_EOL;


	//abrindo o arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
	//escrevemdp o texto
	fwrite($arquivo, $texto);
	//fechado o arquivo
	fclose($arquivo);

	//echo $texto ;
	header('Location: abrir_chamado.php');



?>