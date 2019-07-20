<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
<?php
if(isset($_GET['id'])):$id = $_GET['id'];endif;
$QueryBuscarProduto = "SELECT * FROM produtos WHERE id = $id";
$ExeQrBuscarProduto = $conectar->query($QueryBuscarProduto);

while($dadosProduto = $ExeQrBuscarProduto->fetch_assoc()){
?>
<div class="imgInfoProduto">
    <article class="Produto_um">
        <div class="col-md-4">
            <img id="zoom_01" src="<?php echo $dadosProduto['img']?>" data-zoom-image="<?php echo $dadosProduto['img']?>" width="408px"/>
        </div>
        <div class="col-md-8">
            <div class="opcoesDePag">
                <h1 class="NomeDoProduto"><?php echo $dadosProduto['tipo_produto'].' '.$dadosProduto['marca'].' '.$dadosProduto['titulo_produto']?></h1>
                <h3 class="pagamento"><?php $dadosProduto['promocao']?></h3>
                <h3 class="pagamento"><?php
                    $precoProd1 = $dadosProduto['preco'];
                    $precoProd = number_format($precoProd1,'2',',','.');
                    echo 'R$'.$precoProd.' '.$dadosProduto['meio_pagamento'];
    
                    if($dadosProduto['qtd_estoque']>100){
                        echo '<br>Há '.$dadosProduto['qtd_estoque'].' unidades no estoque';
                    }else if($dadosProduto['qtd_estoque']>20){
                        echo '<br>Corra pois há apenas '.$dadosProduto['qtd_estoque'].' unidades no estoque';
                    }else if($dadosProduto['qtd_estoque']>0){
                        echo '<br>As unidades estão quase acabando, há apenas '.$dadosProduto['qtd_estoque'].' unidades no estoque';
                    }else{
                        echo '<br>Não há unidades no estoque!<br>D:';
                    }
                ?></h3>
        <?php
            if(!isset($_GET['car'])){
        ?>
            <a href="?url=carrinhoCompras&Produto=<?php echo $dadosProduto['id']?>" type="button" class="btn btn-danger">Comprar</a>
            <a href="?url=addCarrinhoCompras&Produto=<?php echo $dadosProduto['id']?>" class="btn btn-default">Adicionar ao Carrinho de compras</a>
        <?php
            }else{
        ?>
            <a href="index.php?url=carrinhoCompras&Produto=<?php echo $dadosProduto['id']?>&car=<?php echo $_GET['car']?>" type="button" class="btn btn-danger">Finalizar Compra</a>
        <?php
            }
        ?>
                <!----<h3 class="pagamento">R$ no Cartão</h3>-->
            </div>
            <p class="DetalhesDoProduto"><?php echo $dadosProduto['detalhes_produto']?></p>
        </div>
    </article>
</div>
<?php
    if(isset($_SESSION['kolosus']['nivel'])){
        $nivel = $_SESSION['kolosus']['nivel'];
        if($nivel=='1'){
        ?>
            <form method="post">
                <label>
                    <input type="number" placeholder="Adicione os produtos" name="prodAdd" class="form-control">
                </label>
                <br>
                <input type="submit" value="Adicionar" name="add" class="btn btn-default">
            </form>
        <?php
            if(isset($_POST['add'])){
                $produto=$dadosProduto['id'];
                $numero=$_POST['prodAdd'];
                $update="UPDATE produtos SET qtd_estoque = qtd_estoque +$numero WHERE id = $produto";
                $query=$conectar->query($update);
                if(isset($query)){
                    echo 'Produtos adicionados no estoque!';
                }else{
                    echo 'Não adicionado';
                }
            }else{
                echo 'Adicione os Produtos';
            }
        }else{
            echo '.';
        }
    }
}
?>
<script type="text/javascript">
$("#zoom_01").elevateZoom();
</script>