<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulario</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <!-- <script language="javascript" src="funcoes1.js"></script>-->
              
    </head>

    <style>
        
      .style-message{
        width: 400px;
        height: 50px;
        /*background-color: #FF0000;*/
        color:#FF0000;
        font-size: 20px;
        font-weight: bold;
        
      }
    </style>
    
    <body>
       <h1>Cadastro de vendedor</h1>
        <main class="container mt-5">
         
        <form onSubmit="return validaCampo();">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email"  class="form-control" id="campoEmail" placeholder="Email" onkeypress="limpa();">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Telefone</label>
                <input type="text"  class="form-control" id="campoSenha" placeholder="Nr de telefone" onkeypress="limpa();">
              </div>
            
            <div class="form-group col-md-2">
              <label for="inputAddress">Data</label>
              <input type="date" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
            </div>

            <div class="form-group col-md-4">
              <label for="inputAddress2">Cpf</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Informe o seu cpf">
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>

              <div class="form-group col-md-4">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control">
                  <option selected>Escolher...</option>
                  <option>...</option>
                </select>
              </div>
              
              <div class="form-group col-md-2">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP">
              </div>
            </div>
           
            <button type="submit" class="btn btn-primary">Enviar</button>
           </div> 
          </form>
          <div id="erro">

          </div>	
          </main>
        
        
    </body>
</html>