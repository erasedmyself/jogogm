<?php
include("conexao.php");
include("banco_cliente.php");
$cod_cliente=$_POST['txtcod'];
$nome=$_POST['txtnome'];
$email=$_POST['txtemail'];
$password=$_POST['passwordsn'];

if(alterar($conexao,$nome,$email,$password)){
echo "Cliente alterado com sucesso!!";
header("Location: pag_listar_cliente.php");
//finalizar processo
die();
}else{
    $msg = mysqli_errno($conexao);
    echo $msg;
}



