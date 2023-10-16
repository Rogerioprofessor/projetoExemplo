<?php
	include 'conexao.php';
	$idcliente 	  = $_POST["id_cliente"];
	$nmcliente    = $_POST["nm_cliente"];
	$dsemail      = $_POST["ds_email"];
	$dsrua        = $_POST["ds_rua"];
	$dsbairro     = $_POST["ds_bairro"];
	$nrcep        = $_POST["nr_cep"];
	$nrtelefone   = $_POST["nr_telefone"];
	
	
	$sql = "update tb_cliente set nm_cliente = '$nmcliente',ds_email='$dsemail',ds_rua = '$dsrua',ds_bairro='$dsbairro', nr_cep = '$nrcep',nr_telefone = '$nrtelefone' where id_cliente = '$idcliente'";
	
	mysqli_query($con,$sql);
	echo "<script>alert('Registro alterado com sucesso');</script>";	
	echo "<script>window.location='main.html'</script>";
	
?>	
	
	
	
	
	
	
	