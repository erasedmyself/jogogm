<link rel="stylesheet" href="pag_alterar_cliente.css"> 

<?php 
include ("conexao.php"); 
include ("banco-cliente.php"); 
$cod_cliente=$_GET['cod_cliente']; 
$cliente=busca($conexao, $cod_cliente); 

?> 

<!DOCTYPE html> 

<html lang="pt-br"> 

<head> 
 <meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Alterar Cliente</title> 

</head> 

<body> 
<center> 
<h1>Alterar Cliente</h1> 

<form action="verificaAlteracao.php" method="post"> 
<h2>Código:</h2><br><input type="text" name="txtcod" value="<?php echo $cliente['cod_cliente'] ?>"><br> 
<h2>Nome:</h2><br><input type="text" name="txtnome" value="<?php echo $cliente['nome'] ?>"><br> 
<h2>Telefone:</h2><br><input type="text" name="txttel" value="<?php echo $cliente['telefone'] ?>"><br> 
<h2>Endereço:</h2><br><input type="text" name="txtend" value="<?php echo $cliente['endereco'] ?>"><br> 
<h2>Email:</h2><br><input type="text" name="txtemail" value="<?php echo $cliente['email'] ?>"><br> 
<h2>Idade:</h2><br><input type="text" name="txtidade" value="<?php echo $cliente['idade'] ?>"><br> 
<h2>Salário:</h2><br><input type="text" name="txtsal" value="<?php echo $cliente['salario'] ?>"><br><br> 
<a href="pag_listar_cliente.php"><input type="submit" id="btn" value="Alterar" name="btn"></a><br><br> 
</form> 
</center> 

</body> 

</html> 