<?php 
session_start();
include 'conection.php';
if (isset($_POST['acao'])){

$name = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];
$_SESSION["perfil"] = $perfil;
$_SESSION["nome"] = $name;
$senha = password_hash($senha,PASSWORD_BCRYPT);
 $sql = "SELECT email FROM `usuarios` WHERE `email`= '".$email."' ";
 $sql = mysqli_query($connection,$sql);
 $sql = mysqli_num_rows($sql);
 if ($sql != 0) {
   echo"<script language='javascript' type='text/javascript'>
   alert('e-mail existente tente fazel login');window.location
   .href='login.php';</script>";
 }else {
    $sql1 = "INSERT INTO usuarios (nome,email,senha) VALUES ('$name','$email','$senha')";
    $a = mysqli_query($connection,$sql1);
 
}
}

?>