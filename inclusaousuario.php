<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inclusão de cadastro</title>
	</head>
	<body>
	  <?php
	    /*
		include - Faz a inclusão do arquivo, permitindo executar a lógica do programa que se encontra neste arquivo
		
		*/
		include 'conexao.php';		
		/*
	     $_POST - É uma variável global que captura o conteúdo que está no formulário por meio da propriedade name		
		*/

		//Passando os dados que estão no formulário para as variáveis abaixo
		$nome      = $_POST['nm_nome'];
		$usuario   = $_POST['nm_usuario'];
		$senha     = $_POST['ds_senha'];
							  	
		/*
		  mysqli_query - É a função do php para execução de script de inserção da tabela
		*/

		 mysqli_query($con,"insert into tb_usuario(nm_nome, nm_usuario, ds_senha)
		 values('$nome','$usuario','$senha')");	
		
		echo"<script>alert('Inclusão realizada com sucesso');</script>";
		echo"<script>window.location='cadastro.php'</script>";		
		
?>
</body>
</html>		
			
			
		