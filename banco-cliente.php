<?php 

//função inserir 
function inserir($conexao,$nome,$tel,$end, $email, $idade, $sal){ 

$sql="insert into cliente values (default, '$nome', '$tel', '$end', '$email', $idade, $sal)"; 

return mysqli_query($conexao, $sql); 

} 

//função alterar 

function alterar($conexao, $nome, $tel, $end, $email, $idade, $sal, $cod_cliente){ 

$sql="update cliente set 

nome='$nome', 
telefone='$tel', 
endereço='$end', 
email='$email', 
idade=$idade, 
salario=$sal where cod_cliente=$cod_cliente"; 
return mysqli_query($conexao, $sql); 
} 

 
//função excluir 
function excluir($conexao, $cod_cliente){ 
    $sql="delete from cliente where cod_cliente= $cod_cliente"; 
return mysqli_query($conexao, $sql); 
 } 

 //função listar clientes 
function listarClientes($conexao){ 
$clientes = array(); 
$resultado = mysqli_query($conexao, "select * from cliente"); 
while ($cliente = mysqli_fetch_assoc($resultado)) { 
array_push ($clientes, $cliente); 
 } 
return $clientes; 
} 

 
//função buscar clientes 
function busca($conexao, $cod_cliente){ 
$resultado = mysqli_query($conexao, "select * from cliente where cod_cliente=$cod_cliente"); 
return mysqli_fetch_assoc($resultado); 
 } 
?> 