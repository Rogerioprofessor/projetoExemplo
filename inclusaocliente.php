<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inclusão de cliente</title>
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
		$nome      = $_POST['nm_cliente'];
		$email     = $_POST['ds_email'];
		$rua       = $_POST['ds_rua'];
		$bairro    = $_POST['ds_bairro'];
		$numero    = $_POST['nr_numero'];
		$nrcep     = $_POST['nr_cep'];
		$nrtelefone= $_POST['nr_telefone'];
							  	
		/*
		  mysqli_query - É a função do php para execução de script de inserção da tabela
		*/
        
		 mysqli_query($con,"insert into tb_cliente(nm_cliente, ds_email, ds_rua,ds_bairro,nr_numero,nr_cep,nr_telefone)
		 values('$nome','$email','$rua$','$bairro','$numero','$nrcep','$nrtelefone')");	
		

		echo"<script>alert('Inclusão realizada com sucesso');</script>";
		//echo"<script>window.location='cliente.php'</script>";		
		
		header('Location: main.html');
		
		
?>
</body>
</html>		
			
			
		