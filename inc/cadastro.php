<?php
include('conexao.php');

$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telefone = $_POST['telefone'];

$sql = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($conexao,$sql);
$datas = mysqli_fetch_array($select);
  $query = "INSERT INTO usuarios (email,senha,username,apelido,telefone,privilegio) VALUES ('$email','$senha','$nome','$apelido','$telefone', 1 )";
  $insert = mysqli_query($conexao,$query);
  mysqli_close($conexao);

  if($insert){
    echo"<script language='javascript' type='text/javascript'>
    window.location.href='/src/login.html'</script>";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível cadastrar esse usuário');window.location.href='/src/cadastro.html'</script>";
  }
?>