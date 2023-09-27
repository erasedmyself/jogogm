<!DOCTYPE html> 

<link rel="stylesheet" href="pag_menu.css"> 

 

<?php 
session_start(); 
if($_SESSION['log'] !="ativo"){ 
session_destroy(); 
header("Location: pag_login.php"); 
 } 
echo "<h2>Olá, " .$_SESSION['nome']."</b>, <br>Bem-vindo ao sistema "; 
echo " <a href='logout.php'><br>Sair<a/> </h2>"; 

?> 

<html lang="pt-br"> 

<head> 
<meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Tela de Menu</title> 

</head> 

<body> 
<h1>Bem-vindo ao sistema</h1> 

 
<li> 
<a href="pag_cadastrar_cliente.php">Cadastro</a> 
 <ul> 
<li> 
<a href="pag_listar_cliente.php">Listar Cliente</a> 
</li> 

</ul> 
</li> 

 
<li> 
<a href="pag_login.php">Login</a> 
<ul> 
<li> 
<a href="pag_listar_cliente.php">Clientes</a> 
</li> 
<?php 
$_SESSION['verifica'] = 'ativo'; 
die(); 
?>
</ul> 
</li> 
</body> 
</html> 