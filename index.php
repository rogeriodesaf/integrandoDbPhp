<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <TITLE>login</TITLE>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
        #tamanho{
            width:350px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(38,9,38,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(38,9,38,1);
box-shadow: 10px 10px 5px 0px rgba(38,9,38,1);
        }
    </style>
</head>
<body>

<div class="container" id="tamanho" style="margin-top: 200px; border-radius: 15px; border: 2px solid #f3f3f3">
<div style="padding">
    <center>
<img src="img/procon.png" width="200px" height="100px" >
    </center>
<form>
<div class="form-group">
    <label>Usuário</label>
    <input type="text" name="usuario" class="form-control" placeholder="Usuário">
</div>
    <label>Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Insira a senha.">
</div>
</form>
<div style="margin-top: 40px">
<div style="text-align: center;">
<button type="submit" class="btn btn-sm btn-success">Entrar</button>
</div>
</div>


<div style="margin-top: 10px">
<center>
<small><p>Você não possui cadastro? Clique<a href="cadastro-usuario-externo.php"> aqui. </a></p></small>

</center>

</div>







  <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
