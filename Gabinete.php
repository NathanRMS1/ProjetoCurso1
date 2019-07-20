<?php include_once 'banner.php';
/*Buscar os produtos*/
$QueryBuscarGabinete = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Gabinete' ORDER BY id DESC";
$ExeQrBuscarGabinete = $conectar->query($QueryBuscarGabinete);
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <h1 class="titulos">Gabinete</h1>
        <div class="DestaquesGabinete">
            <?php
            $contador='0';
            $linhas='3';
            while($dadosGabinete =$ExeQrBuscarGabinete->fetch_assoc()){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosGabinete['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosGabinete['marca'] . ' '.$dadosGabinete['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosGabinete['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosGabinete['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoGabinete = $dadosGabinete['preco'];
                    $precoGabinete = number_format($precoGabinete,'2',',','.');
                    echo 'R$'.$precoGabinete.' '.$dadosGabinete['meio_pagamento'];
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