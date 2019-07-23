<?php 
$update= "UPDATE produtos SET qtd_estoque = qtd_estoque -1 WHERE id = $produto";
$upValor=$conectar->query($update);
?>