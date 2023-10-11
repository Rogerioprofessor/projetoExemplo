
	  <?php
	    /*
		include - Faz a inclusão do arquivo, permitindo executar a lógica do programa que se encontra neste arquivo
		
		*/
		include 'conexao.php';		
		/*
	     $_POST - É uma variável global que captura o conteúdo que está no formulário por meio da propriedade name		
		*/

		//Passando os dados que estão no formulário para as variáveis abaixo
		$nome      = $_POST['nm_vendedor'];
		$email     = $_POST['ds_email'];
		$cidade    = $_POST['ds_cidade'];
		$estado    = $_POST['ds_estado'];
							  	
		/*
		  mysqli_query - É a função do php para execução de script de inserção da tabela
		*/
        
		 mysqli_query($con,"insert into tb_vendedor(nm_vendedor, ds_email,ds_cidade,ds_estado)
		 values('$nome','$email','$cidade','$estado')");	
		

		echo"<script>alert('Inclusão realizada com sucesso');</script>";
		//echo"<script>window.location='cliente.php'</script>";		
		
		header('Location: main.html');
		
		
?>
		
			
			
		