<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost','root','','database');
  if (isset($entrar)) {

    // Msqli_query necessario adicionar a variavel connect a função 
    $verifica = mysqli_query($connect,"SELECT * FROM tabelausuario WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");

      if (mysqli_num_rows($verifica)<=0){
       echo"<script language='javascript' type='text/javascript'>
       alert('Login e/ou senha incorretos');window.location
      .href='login.html';</script>";
       die();
       }else{
      setcookie("login",$login);
      header("Location:trabalho.html");
      }
  }


?>


