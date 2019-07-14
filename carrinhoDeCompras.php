<?php
if(!isset($_SESSION['kolosus']['id'])){
    ?>
<meta http-equiv="refresh" content="0;index.php?url=login">
<script>alert("Faça login para acessar esta parte do site, por favor!");</script>
<?php
    die();
}
$user=$_SESSION['kolosus']['id'];
$queryCarrinho="SELECT * FROM carrinho WHERE idUsuario=$user";
$exeQrCarrinho=$conectar->query($queryCarrinho)or die(mysql_error());
?>
<a href="index.php?url=listaComprado" class="btn btn-success botao">Histórico de Compras</a>
<?php
while($listaCarrinho=$exeQrCarrinho->fetch_assoc()){
    $car['carrinho']=$listaCarrinho['id'];
    $car['id']=$listaCarrinho['idProduto'];
    $car['user']=$listaCarrinho['idUsuario'];
    $idC=$car['carrinho'];
    $id=$car['id'];
    $prod="SELECT * FROM produtos WHERE id=$id";
    $exeProd=$conectar->query($prod)or die(mysql_error());
    while($dadosCarrinho=$exeProd->fetch_assoc()){
        ?>
        <div class="ListaDeProdutosS row bg-secondary text-white">
            <div class="col-md-2">
                <img class="produtoNaLista" src="<?php echo $dadosCarrinho['img']?>" data-zoom-image="<?php echo $dadosCarrinho['img']?>" title="produto na lista" id="zoom_01">
            </div>
            <div class="col-md-10">
                <h2 class="H-titulo">
                    <?php echo $dadosCarrinho['tipo_produto']." ".$dadosCarrinho['marca']." ".$dadosCarrinho['titulo_produto'];?>
                </h2>
                <span class="H-subititulo">
                    <?php echo $dadosCarrinho['detalhes_produto']?>
                </span>
                <div class="BotsEmLista">
                    <a href="index.php?url=Produto&id=<?php echo $dadosCarrinho['id']?>&car=<?php echo $idC?>" class="linkProdutos"><button type="button" class="btn btn-info BotsLista">Detalhes</button></a>
                    <a href="index.php?url=carrinhoCompras&Produto=<?php echo $dadosCarrinho['id']?>&car=<?php echo $idC?>" class="AddCarrinho"><button type="button" class="btn btn-warning BotsLista">Comprar</button></a>
                </div>
                <div class="PrecosEmLista">
                    <span class="precoAvista">
                        <b> 
                        <?php
                        $precoProd1 = $dadosCarrinho['preco'];
                        $precoProd = number_format($precoProd1,'2',',','.');
                        echo 'R$'.$precoProd.'<br>'.$dadosCarrinho['meio_pagamento'];
                        ?></b>
                    </span>
                    <br>
                    <span class="Estoque">
                        <b><?php echo 'Há '.$dadosCarrinho['qtd_estoque'].' no estoque'?></b>
                    </span>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
<script type="text/javascript">
$("#zoom_01").elevateZoom();
</script>