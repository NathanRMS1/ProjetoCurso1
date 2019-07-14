<?php include_once 'banner.php';
/*Buscar os produtos*/
$QueryBuscarHeadset = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Headset' ORDER BY id DESC";
$ExeQrBuscarHeadset = $conectar->query($QueryBuscarHeadset);
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <h1 class="titulos">Headset</h1>
        <div class="DestaquesHeadSet">
            <?php
            $contador='0';
            $linhas='3';
            while($dadosHeadset = $ExeQrBuscarHeadset->fetch_assoc()){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosHeadset['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosHeadset['marca'] . ' '.$dadosHeadset['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosHeadset['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosHeadset['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoHeadset = $dadosHeadset['preco'];
                    $precoHeadset = number_format($precoHeadset,'2',',','.');
                    echo 'R$'.$precoHeadset.' '.$dadosHeadset['meio_pagamento'];
                ?></span>
                </div>
            </article>
            <?php
                $contador++;
                if($contador==$linhas){
                    echo '<div class="limpezaLista"></div>';
                    $linhas++;
                    $linhas++;
                    $linhas++;
                }
            }
            ?>
        </div>
    </section>
</div>