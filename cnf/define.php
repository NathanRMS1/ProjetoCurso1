<?php

define("SERVIDOR","localhost");
define("USUARIO","root");
define("SENHA","");
define("BANCO_DADOS","pessoas");
/*
define("SERVIDOR","localhost");
define("USUARIO","n2y");
define("SENHA","");
define("BANCO_DADOS","turmas");
/*
CREATE TABLE finalizar_compra(id int(11) PRIMARY KEY AUTO_INCREMENT, id_compra int(11), nome_comprador varchar(255), email_comprador varchar(255), id_produto_comprado int(11), produto_comprado varchar(255), meio_pagamento varchar(255), valor_total varchar(255), data_compra varchar(255))ENGINE INNODB;
*/

$conectar= new mysqli(SERVIDOR,USUARIO,SENHA,BANCO_DADOS);

// if($certo):echo'connected';else:echo'Não foi dessa vez que você conseguiu';endif;
?>
<?php/*


$host="localhost";
$user="root";
$pass="";
$db="s16";
$conexao= new mysqli($host,$user,$pass,$db);


/*
BANCO DE DADOS:
CREATE DATABASE pessoas COLLATE utf8_general_mysql500_ci;
CREATE TABLE usuario(id int(11) PRIMARY KEY AUTO_INCREMENT,nome varchar(255),email varchar(255),senha varchar(255))ENGINE INNODB;
*/
?>