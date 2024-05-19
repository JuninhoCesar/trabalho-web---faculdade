<?php
try {

$connect = mysqli_connect('localhost', 'root', '', 'database'); 

$login = $_POST['login']; 
$senha = $_POST['senha'];
$email = $_POST['email'];
$genero= $_POST['genero'];



$query_select = "SELECT login FROM tabelausuario WHERE login = '$login'";
$select = mysqli_query($connect, $query_select); // mysql trocado por mysqli
$array = mysqli_fetch_array($select);
$logarray = $array['login'];




  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO tabelausuario (login,senha,email,genero) VALUES ('$login','$senha','$email','$genero')";
        $insert = mysqli_query($connect,$query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      } 
    }
} catch (Exception $e) {  

    echo "Não foi possivel se conectar"; } 

?>