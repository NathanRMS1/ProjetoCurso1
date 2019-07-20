<?php include_once 'banner.php';
$QueryBuscarDestaques = "SELECT * FROM produtos WHERE promocao LIKE '0' ORDER BY preco ASC";
$ExeQrBuscarDestaques = $conectar->query($QueryBuscarDestaques);

$QueryBuscarTeclados = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Teclados' ORDER BY id DESC";
$ExeQrBuscarTeclados = $conectar->query($QueryBuscarTeclados);

$QueryBuscarMouse = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Mouse' ORDER BY id DESC";
$ExeQrBuscarMouse = $conectar->query($QueryBuscarMouse);

$QueryBuscarHeadset = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Headset' ORDER BY id DESC";
$ExeQrBuscarHeadset = $conectar->query($QueryBuscarHeadset);

$QueryBuscarMonitor = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Monitor' ORDER BY id DESC";
$ExeQrBuscarMonitor = $conectar->query($QueryBuscarMonitor);
//Vai ter que criar um novo arquivo para exibir os resultados da busca ok
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <!--Destaques-->
        <h1 class="titulos">Destaques</h1>
        <div class="chamadasDestaques">
            <?php
            //é isso
            $contador=0;
            $maximo=9;
            $max=3;
            $linhas=3;
            while(($dadosDestaques = $ExeQrBuscarDestaques->fetch_assoc()) && ($contador<$maximo)){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosDestaques['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosDestaques['marca'] . ' '.$dadosDestaques['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosDestaques['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosDestaques['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoDestaques = $dadosDestaques['preco'];
                    $precoDestaques = number_format($precoDestaques,'2',',','.');
                    echo 'R$'.$precoDestaques.' '.$dadosDestaques['meio_pagamento'];
                    ?></span>
                </div>
            </article>
            <?php
                if($contador==$linhas){
                    echo '<div class="limpezaLista"></div>';
                    $linhas++;
                    $linhas++;
                    $linhas++;
                }
                $contador++;
            }
            $contador=0;
            ?>
        </div>  
        <!--Teclados-->
        <h1 class="titulos">Teclados</h1>
        <div class="DestaquesTeclados">
            <?php
            while(($dadosTeclados = $ExeQrBuscarTeclados->fetch_assoc())and($contador<$max)){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosTeclados['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosTeclados['marca'] . ' '.$dadosTeclados['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosTeclados['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosTeclados['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoTeclado = $dadosTeclado['preco'];
                    $precoTeclado = number_format($precoTeclado,'2',',','.');
                    echo 'R$'.$precoTeclado.' '.$dadosTeclado['meio_pagamento'];
                ?></span>
                </div>
            </article>
            <?php
                $contador++;
            }
            $contador=0;
            ?>
        </div>
        <!--Mouse-->
        <h1 class="titulos">Mouse</h1>
        <div class="DestaquesMouse">
            <?php
            while(($dadosMouse = $ExeQrBuscarMouse->fetch_assoc())and($contador<$max)){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosMouse['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosMouse['marca'] . ' '.$dadosMouse['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosMouse['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosMouse['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoMouse = $dadosMouse['preco'];
                    $precoMouse = number_format($precoMouse,'2',',','.');
                    echo 'R$'.$precoMouse.' '.$dadosMouse['meio_pagamento'];
                ?></span>
                </div>
            </article>
            <?php
                $contador++;
            }
            $contador=0;
            ?>
        </div>
        <!--HeadSet-->
        <h1 class="titulos">Headset</h1>
        <div class="DestaquesHeadSet">
            <?php
            while(($dadosHeadset = $ExeQrBuscarHeadset->fetch_assoc())and($contador<$max)){
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
            }
            $contador=0;
            ?>
        </div>
        <!--Monitores-->
        <h1 class="titulos">Monitor</h1>
        <div class="DestaquesMonitor">
            <?php
            while(($dadosMonitor = $ExeQrBuscarMonitor->fetch_assoc())and($contador<$max)){
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
            }
            $contador=0;
            ?>
        </div>
    </section>
</div>