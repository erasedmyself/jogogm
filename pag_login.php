<!DOCTYPE html> 

<link rel="stylesheet" href="pag_login.css"> 

<html lang="pt-br"> 

<head> 
<meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Login</title> 

</head> 

<body> 
<center> 
<h1>Tela de Login</h1> 
<form action="" method="post"> 
<h2>Usuário:</h2> <br><input type="text" name="txtu" placeholder="Digite Login"><br><br> 

 
<h2>Senha:</h2> <br><input type="password" name="txts" placeholder="Digite Senha"><br><br><br> 
<input type="submit" id="btn" value="Logar"><br><br> 
</form> 
<?php 
include ("conexao.php"); 
include ("banco-usuario.php"); 
if($_POST){ 
$login=$_POST['txtu']; 
$senha=$_POST['txts']; 
if (efetuarLogin($conexao,$login,$senha)){ 
session_start(); 
$_SESSION['nome']=$login; 
 $_SESSION['log']='ativo'; 
header("Location: pag_menu.php"); 
die(); 
 }else{ 
 echo ("Usuário não encontrado"); 
 } 
} 
?> 
</center> 

</body> 

</html> 