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
        <h1>Cadastro de vendedor</h1>
        <main class="container mt-5">
        <form action ="inclusaovendedor.php" method="post" onSubmit="return validaCampo();">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nm_vendedor">Nome</label>
                <input type="text"  class="form-control" id="nm_vendedor" name="nm_vendedor" placeholder="Nome" onkeypress="limpa();">
              </div>

              <div class="form-group col-md-6">
                <label for="ds_email">Email</label>
                <input type="email"  class="form-control" id="ds_email" name="ds_email" placeholder="Email" onkeypress="limpa();">
              </div>
              
              <div class="form-group col-md-8">
                <label for="ds_cidade">Cidade</label>
                <input type="text" class="form-control" id="ds_cidade" name="ds_cidade"  placeholder="Cidade" onkeypress="limpa();">
              </div>              

              <div class="form-group col-md-4">
                <label for="ds_estado">Estado</label>
                <select id="ds_estado" name="ds_estado" class="form-control">
                  <option selected>Escolher...</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="PR">Parana</option>
                  <option value="SP">São Paulo</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="RN">Rio Grande do Norte</option>
                </select>
              </div> 
              
              <button type="submit" class="btn btn-primary">Enviar</button>
           </div> 
          </form>
          <div id="erro">

          </div>	
          </main>
        
        
    </body>
</html>