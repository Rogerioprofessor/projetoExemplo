
<html lang="pt-br">
	<head>		
		<meta charset="utf-8">
		<title>Consulta de vendedores</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta charset="utf-8">
        
        <!-- adicionar CSS Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <!-- css personalizado -->
        <link href="css/estilo.css" rel="stylesheet" media="screen">
		
		<script>
			function apagar(id){				
				if(window.confirm("Confirma a exclusão ? ")){
					window.location = "excluir_aluno.php?id=" + id;
				}				
			}		
		</script>		
	</head>
	<?php
		require 'conexao.php';	
		$sql = 'select * from tb_vendedor';
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
								</tr>	
							</thead>
							<?php
								$contlin = 2;
								while($reg_cadastro=mysqli_fetch_array($query))
								{
									$vendedor=$reg_cadastro["nm_vendedor"];
									$email = $reg_cadastro["ds_email"];
									
									
								?>
								 <tr class="info">
									<?php
										if($contlin%2 == 0){
											?>
											<tr class="trpar">					
									<?php
										}
									?>	
									<td><?php echo $vendedor ?></td>									
									<td><?php echo $email ?></td>
									
									
									<td align="center"><a href="editarcliente.php?id=<?php echo $reg_cadastro["idvendedor"]?>" class="btn btn-success">Alterar</a>
									<td align="center"><a href="#" class="btn btn-danger" onclick = "apagar('<?php echo $reg_cadastro["idvendedor"]?>');">Excluir</td>
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








