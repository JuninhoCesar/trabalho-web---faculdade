<?php // uutiliza o metodo post para pegar os dados.
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost:7777','root','','database');// conexão com banco de dados.
  if (isset($entrar)) {

    // comando sql.
    $verifica = mysqli_query($connect,"SELECT * FROM tabelausuario WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");

      if (mysqli_num_rows($verifica)<=0){ // verifica se o login e senha corresponde.
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


