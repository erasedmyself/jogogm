<!DOCTYPE html> 

<link rel="stylesheet" href="pag_cadastrar_cliente.css"> 

<?php 
session_start(); 

if($_SESSION['log'] != "ativo"){ 
session_destroy(); 
header("Location: pag_login.php"); 
} 

?> 

<html lang="pt-br"> 

<head> 
<meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>cadastro Usuário</title> 

</head> 

<body> 
<center> 
<h1>Cadastro Usuário</h1> 
<form action="verificaCadastro.php" method="post" class="text"> 
<h2>Nome:</h2> <input type="text" name="txtnome" placeholder="Digite Nome"><br> 
<h2>Telefone:</h2> <input type="text" name="txttel" placeholder="Digite Telefone"><br> 
<h2>Endereço:</h2> <input type="text" name="txtend" placeholder="Digite Endereço"><br> 
<h2> Email:</h2> <input type="text" name="txtemail" placeholder="Digite Email"><br> 
<h2>Idade:</h2> <input type="text" name="txtidade" placeholder="Digite Idade"><br> 
<h2> Salario:</h2> <input type="text" name="txtsal" placeholder="Digite Salário"><br> 
 <br> 
<input type="submit" value="Cadastrar" id="btn" name="btn"><br> 
</form> 
</center> 

</body> 

</html> 