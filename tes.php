<?php
if(($_SERVER['REQUEST_METHOD']) == "POST"){
  $usuario = $_POST ['usuario']; 
  $senha = $_POST ['senha']; 
  if ($usuario == "admin" && $senha == "admin") {
    session_start();
    $_SESSION['usuario'] = $usuario;
      Header('location:index.php');
      exit();
  } else{
      Header('location:login.php');
  }
}
?>