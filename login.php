<?php 
include 'conection.php';

if (isset($_POST['acao'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT email FROM `usuarios` WHERE `email`= '".$email."' ";
    //$sql = mysqli_query($connection,$sql);
    //$sql = mysqli_num_rows($sql);
    //if ($sql != 0) {
        
        $sql1 = "SELECT senha FROM `usuarios` WHERE email = '$email'";
        $verificar = mysqli_query($connection,$sql1);

    $dado = $verificar->fetch_array();
        
var_dump($dado['senha']);
if ($dado['senha'] != null){

       // password_needs_rehash
        if (password_verify($senha, $dado['senha'])){
            header('location:home.php');
        }else{
           
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');/*window.location
            .href='login.php';*/</script>";
        }

    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('usuario inexistente');/*window.location
        .href='login.php';*/</script>";
    }
    //}else {
      //  header('location: cadastro.php')
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    
<div class="container">



<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" name="acao" class="btn btn-primary">Submit</button>
<a href="cadastro.php">cadastre-se</a>
</form>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html> 