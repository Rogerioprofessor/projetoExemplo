<?php
	include 'conexao.php';
	if(is_numeric($_GET["id"])){
		$sql = "DELETE FROM tb_cliente WHERE id_cliente = ".$_GET["id"];
		mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) >=0){
			echo"<script>alert('Registro apagado com sucesso');</script>";
			echo"<script>window.location='main.html'</script>";
			}
	}