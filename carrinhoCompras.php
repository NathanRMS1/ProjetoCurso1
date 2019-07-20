<!doctype html>
<?php
if(!isset($_SESSION['kolosus']['id'])){
    ?>
<meta http-equiv="refresh" content="0;index.php?url=login">
<script>alert("Faça login para acessar esta parte do site, por favor!");</script>
<?php
    die();
}
if(isset($_GET['car'])){
    $car=$_GET['car'];
    if(isset($_POST['ComprarProdutoCar'])){
        $produto = $_GET['Produto'];
        include_once 'updateNaTabela.php';
        include_once 'updateNaOutraTabela.php';
        include_once 'finalizarCompra.php';
    }else{
        include_once 'carrinhoCompras1.php';
    }
}else{
    if(isset($_POST['ComprarProduto'])){
        $produto = $_GET['Produto'];
        include_once 'updateNaTabela.php';
        include_once 'finalizarCompra.php';
    }else{
        include_once 'carrinhoCompras1.php';
    }
}