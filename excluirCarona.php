<?php
		include_once("caronas.php");
		$codCarona = $_GET["id"];
		// Exclui carona do banco de dados
		excluiCarona($codCarona);	
		// Redireciona para a página de lista de caronas
		header("location:listaDeMinhasCaronas.php");
 ?>
