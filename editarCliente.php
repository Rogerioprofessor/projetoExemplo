<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulario</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/script.js"></script>
    </head>

    <?php
			include 'conexao.php';
			if(isset($_GET["id"])){
			   if(is_numeric($_GET["id"])){
					$id = $_GET["id"];
					$sql = "select * from tb_cliente where id_cliente = ".$_GET["id"];
					$executa=mysqli_query($con,$sql);
					$resultado=mysqli_fetch_array($executa);
				}
			}			
		?>
    
    <body>
        <h1>Alteração de registro</h1>
        <main class="container mt-5">
        <form action ="alterar_cliente.php" method="post" onSubmit="return validaCampo();">
            <div class="form-row">
            <div class="form-group col-md-12">
                <input type="hidden"  class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $resultado["id_cliente"];?>"/> 
             </div>

              <div class="form-group col-md-6">
                <label for="nm_cliente">Nome</label>
                <input type="text"  class="form-control" id="nm_nome" name="nm_cliente" value="<?php echo $resultado["nm_cliente"];?>"/> 
              </div>

              <div class="form-group col-md-6">
                <label for="ds_email">Email</label>
                <input type="email"  class="form-control" id="ds_email" name="ds_email" value="<?php echo $resultado["ds_email"];?>"/> 
              </div>
              
              <div class="form-group col-md-6">
                <label for="ds_rua">Rua</label>
                <input type="text" class="form-control" id="ds_rua" name="ds_rua"  value="<?php echo $resultado["ds_rua"];?>">
              </div>              

              <div class="form-group col-md-6">
                <label for="ds_bairro">Bairro</label>
                <input type="text" class="form-control" id="ds_bairro" name="ds_bairro" value="<?php echo $resultado["ds_bairro"];?>"/>
              </div>

              <div class="form-group col-md-2">
                <label for="nr_numero">Nr residencial</label>
                <input type="number" class="form-control" id="nr_numero" name="nr_numero" value="<?php echo $resultado["nr_numero"];?>"/>
              </div>

              <div class="form-group col-md-4">
                <label for="nr_cep">Cep</label>
                <input type="text" class="form-control" id="nr_cep" name="nr_cep" value="<?php echo $resultado["nr_cep"];?>"/>
              </div>

              <div class="form-group col-md-6">
                <label for="nr_telefone">Telefone</label>
                <input type="text"  class="form-control" id="nr_telefone" name="nr_telefone"  value="<?php echo $resultado["nr_telefone"];?>"/> 
              </div>            
              
              <button type="submit" class="btn btn-primary">Enviar</button>
           </div> 
          </form>
          <div id="erro">

          </div>	
          </main>
        
        
    </body>
</html>