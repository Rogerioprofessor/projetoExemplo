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
    </head>

   


    </style>
    
    <body>
        <h1>Cadastro de cliente</h1>
        <main class="container mt-5">
        <form action ="inclusaocliente.php" method="post" onSubmit="return validaCampo();">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nm_cliente">Nome</label>
                <input type="text"  class="form-control" id="nm_nome" name="nm_cliente" placeholder="Nome" onkeypress="limpa();">
              </div>

              <div class="form-group col-md-6">
                <label for="ds_email">Email</label>
                <input type="email"  class="form-control" id="ds_email" name="ds_email" placeholder="Email" onkeypress="limpa();">
              </div>
              
              <div class="form-group col-md-6">
                <label for="ds_rua">Rua</label>
                <input type="text" class="form-control" id="ds_rua" name="ds_rua"  placeholder="Rua" onkeypress="limpa();">
              </div>              

              <div class="form-group col-md-6">
                <label for="ds_bairro">Bairro</label>
                <input type="text" class="form-control" id="ds_bairro" name="ds_bairro" placeholder="Bairro" onkeypress="limpa();">
              </div>

              <div class="form-group col-md-2">
                <label for="nr_numero">Nr residencial</label>
                <input type="number" class="form-control" id="nr_numero" name="nr_numero"  min="0" onkeypress="limpa();">
              </div>

              <div class="form-group col-md-4">
                <label for="nr_cep">Cep</label>
                <input type="text" class="form-control" id="nr_cep" name="nr_cep" placeholder="Nr cep" onkeypress="limpa();">
              </div>

              <div class="form-group col-md-6">
                <label for="nr_telefone">Telefone</label>
                <input type="text"  class="form-control" id="nr_telefone" name="nr_telefone"  placeholder="Nr de telefone" onkeypress="limpa();">
              </div>            
              
              <button type="submit" class="btn btn-primary">Enviar</button>
           </div> 
          </form>
          <div id="erro">

          </div>	
          </main>
        
        
    </body>
</html>