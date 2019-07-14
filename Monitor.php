<?php include_once 'banner.php';
/*Buscar os produtos*/
$QueryBuscarMonitor = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Monitor' ORDER BY id DESC";
$ExeQrBuscarMonitor = $conectar->query($QueryBuscarMonitor);
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <h1 class="titulos">Monitor</h1>
        <div class="DestaquesMonitor">
            <?php
            $contador='0';
            $linhas='3';
            while($dadosMonitor = $ExeQrBuscarMonitor->fetch_assoc()){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosMonitor['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosMonitor['marca'] . ' '.$dadosMonitor['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosMonitor['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosMonitor['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoMonitor = $dadosMonitor['preco'];
                    $precoMonitor = number_format($precoMonitor,'2',',','.');
                    echo 'R$'.$precoMonitor.' '.$dadosMonitor['meio_pagamento'];
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