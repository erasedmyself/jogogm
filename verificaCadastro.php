<link rel="stylesheet" href="verificaCadastro.css"> 

 

<?php 

include ("conexao.php"); 

include ("banco-cliente.php"); 

 

$nome=$_POST['txtnome']; 

$tel=$_POST['txttel']; 

$end=$_POST['txtend']; 

$email=$_POST['txtemail']; 

$idade=$_POST['txtidade']; 

$sal=$_POST['txtsal']; 

 

if(inserir($conexao, $nome, $tel, $end, $email, $idade, $sal)){ 
echo("<h2>Cliente inserido com sucesso</h2>"); 

}else{ 
 $msg=mysqli_error($conexao); 
echo($msg); 

} 

?> 