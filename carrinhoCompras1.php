<?php 
if(isset($_GET['Produto'])){
    $produto = $_GET['Produto'];
    //$_SESSION['CARRINHO'] = $_SESSION['CARRINHO'];<- Tá difícil de lembrar como faz...
    $ExeQrBuscarProduto = $conectar->query("SELECT * FROM produtos WHERE id = $produto");
    if(mysqli_num_rows($ExeQrBuscarProduto) > 0){
        echo '<div class="container-fluid">';
        while($ResBuscarProduto = $ExeQrBuscarProduto->fetch_assoc()){
            #list($ID,$IMG,$TIPO,$MARCA,$TITULO,$PRECO,$PROMOCAO,$MEIO_PAGAMENTO,$DETALHES,$QTD_ESTOQUE) = 
            extract($ResBuscarProduto);
        ?>
            <article class="ProdutosNoCarrinho">
                <h1><?php echo $tipo_produto.'-'.$marca.' '.$titulo_produto?></h1><br>
                <form method="post">
                <div class="col-md-6">
                    <img src="<?php echo $img?>" alt="<?php echo $tipo_produto. '-'.$marca .' '.$titulo_produto?>" title="<?php echo $tipo_produto. '-'.$marca .' '.$titulo_produto?>" class="img-responsive">
                </div>
                <div class="col-md-6 bg-cor">
                    <p class="InfoProduto">
                        <?php echo $detalhes_produto.'<br><br>Há '.$qtd_estoque.' unidades no estoque.'?>
                    </p>
                </div>
            <?php
            if(!isset($_GET['car'])){
            ?>
                <button type="submit" name="ComprarProduto" class="btn btn-success pull-right">Finalizar Compra</button>
                <a href="index.php?url=Home" class="btn btn-danger pull-right">Continuar Comprando</a>
            <?php
            }else{
                ?>
                <button type="submit"  name="ComprarProdutoCar" class="btn btn-success pull-right">Finalizar Compra</button>
                <?php
            }
            ?>
                </form>
            </article>
        <?php
        }
        echo '</div>';
    }
}else{
    ?>
    <meta http-equiv="refresh" content="0;index.php?url=404Produto">
<?php
}