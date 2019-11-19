<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Api - list Dogs</title>
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="estilo">
<html>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
  </head>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);" type="button" onclick="mudaEstilo()" value="Alterar fonte e background">Alterar cor Fonte e Background</a>
          </li>
        </ul>
      </div>
    </nav>
    </header>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-10 offset-md-1">
          <p id="dogInfo"></p>
          <h2>Lista randomica de imagens</h2>
          <div class="alert alert-danger" role="alert"></div>
          <div id="randomImageContainer"></div>
          <p class="dogInfo h5">Random image of a...</p>
          <button class="btn btn-primary random">Lista randomica - Dog!</button>
        </div>    
      </div>
    </div>
  
    
  <div class="container-fluid">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-10 offset-md-1">
          <h2>Seleciona a raça do cachorro</h2>
          <div class="form-group">
            <select name="doggosDropdown" id="doggoDropDown" class="edit custom-select form-control"></select>
          </div>
          <div id="listImageContainer"></div>
          <button class="btn btn-primary list">Mais desta raça!</button>
        </div>
      </div>
   </div><!--end container-->
  </div><!--end container fluid-->
  
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-md-10 offset-md-1">
        <h1>Grade raças de cachorros</h1>        
          <div class="card-deck mb-3 text-center"> </div>
          <button class="btn btn-primary grid">Atualizar Grid</button>
      </div>      
    </div>
  </div>
  

  
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
  </div>
  <!-- Copyright -->
</html>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script  src="js/script.js"></script>

</body>
</html>