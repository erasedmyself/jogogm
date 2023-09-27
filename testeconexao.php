<link rel="stylesheet" href="testeconexao.css"> 

 

<?php 

include("conexao.php"); 

if(!$conexao){ 
echo ("<h2>Não foi possível conectar ao banco</h2>"); 
exit; 

}else{ 

echo ("<h2>Conexão criada com sucesso</h2>"); 

} 

?> 