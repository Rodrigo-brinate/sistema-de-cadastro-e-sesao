<?php 
include 'cadastro_perfil.php';

if (isset($_POST['acao'])){
  class object {
    public $nome;
    public $namep;
    public $telefone;

    function set_name($nome,$namep,$telefone){
      $this->nome = $nome;
      $this->namep = $namep;
      $this->telefone = $telefone;
    }

    function get_name() {
      return $this->nome;$this->namep;$this->telefone;
    }
  }
  $nome = new object();
  $namep = new object();
  $telefone = new object();
  $nome->set_name($_POST['object_name'])
  $nome->set_name($_POST['senha'])
  $nome->set_name($_POST['perfil'])
  $_SESSION['nome']= $nome->get_name();
  $_SESSION['namep']= $namep->get_name();
  $_SESSION['telefone']= $telefone->get_name();
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">object</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/cadastro/home.php">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">tools</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">help</a>
      </li>
      </ul>
      
  </div>
  <div class="d-sm-none d-md-none d-lg-inline float-lg-right  ">
      
      <a class="d-none d-sm-none  d-md-block navbar-brand text-right" href="#">
    <img class="d-md-none d-sm-none d-md-inline" src="<?php echo $_SESSION["perfil"]?>" width="30" height="30" alt="" loading="lazy">
    <?php echo $_SESSION["nome"]?>
  </a>
        
      </div>
</nav>



<div style="background-color:#d9d9d9;height:100vh;" class="container">
<p class="text-center">none object added</p>
<!-- Botão para acionar modal -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
  add object
</button>


<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add obbject </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

      <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">object name</label>
    <input type="nome" name="object_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">pessoa qual você emprestou</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="custom-file">
    <input type="number"  class=""  name="perfil"id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class=""  for="inputGroupFile01">telefone dele</label>
  </div>
  <button type="submit" class="btn btn-primary" name="acao">Submit</button>
</form>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">add object</button>
      </div>
    </div>
  </div>
</div>









</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>