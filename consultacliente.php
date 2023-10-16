
<html lang="pt-br">
	<head>		
		<meta charset="utf-8">
		<title>Consulta de clientes</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta charset="utf-8">
        
        <!-- adicionar CSS Bootstrap >-->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <!-- css personalizado >-->
        <link href="css/estilo.css" rel="stylesheet" media="screen">
		
		<script src="js/script.js"></script>
		<script>
			function apagar(id){				
				if(window.confirm("Confirma a exclusão ? ")){
					window.location = "excluir_cliente.php?id=" + id;
				}				
			}		
		</script>		
	</head>
	<?php
		require 'conexao.php';	
		$sql = 'select * from tb_cliente';
		$query = mysqli_query($con,$sql);
	?>		
	<body>
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-condensed">
							<thead>
								<tr class="success">	
									<th>Nome</th>
									<th>Email</th>
									<th>Telefone</th>
									
								</tr>	
							</thead>
							<?php
								$contlin = 2;
								while($reg_cadastro=mysqli_fetch_array($query))
								{
									$cliente=$reg_cadastro["nm_cliente"];
									$email = $reg_cadastro["ds_email"];
									$telefone = $reg_cadastro["nr_telefone"]."<br>";
									
								?>
								 <tr class="info">
									<?php
										if($contlin%2 == 0){
											?>
											<tr class="trpar">					
									<?php
										}
									?>	
									<td><?php echo $cliente ?></td>									
									<td><?php echo $email ?></td>
									<td><?php echo $telefone ?></td>
									
									<td align="center"><a href="editarCliente.php?id=<?php echo $reg_cadastro["id_cliente"]?>" class="btn btn-success">Alterar</a>
									<td align="center"><a href="#" class="btn btn-danger" onclick = "apagar('<?php echo $reg_cadastro["id_cliente"]?>');">Excluir</td>
								</tr>

							<?php
								$contlin = $contlin + 1;
								}
							?>
						</table>
				</div>
			</div>
		</div>
	</div>			
	
	<!--<div class="col-xs-offset-4 col-xs-10">-->
	<div class='col-xs-offset-1'>
		<a href="menu.php" class="btn btn-info">Voltar</a>
	</div>
  </body>
</html>








