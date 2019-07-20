<?php
if(!isset($_SESSION['kolosus']['id'])){
    ?>
<meta http-equiv="refresh" content="0;index.php?url=login">
<script>alert("Faça login para acessar esta parte do site, por favor!");</script>
<?php
    die();
}
$idUser=$_SESSION['kolosus']['id'];
$idProduto=$_GET['Produto'];
$inserirCarrinho="INSERT INTO carrinho(idUsuario,idProduto) VALUES('$idUser','$idProduto')";
$query=$conectar->query($inserirCarrinho)or die(mysql_error());
if(isset($query)){
    ?>
    <script>
        alert("Compra adicionada");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Erro!!!");
    </script>
    <?php
}
?>
<meta http-equiv="refresh" content="0;index.php">