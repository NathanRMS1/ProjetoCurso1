<?php include_once 'banner.php';
/*Buscar os produtos*/
$QueryBuscarTeclados = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Teclado' ORDER BY id DESC";
$ExeQrBuscarTeclados = $conectar->query($QueryBuscarTeclados);
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <h1 class="titulos">Teclados</h1>
        <div class="DestaquesTeclados">
            <?php
            $contador='0';
            $linhas='3';
            while($dadosTeclados = $ExeQrBuscarTeclados->fetch_assoc()){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosTeclados['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosTeclados['marca'] . ' '.$dadosTeclados['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosTeclados['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosTeclados['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoTeclados = $dadosTeclados['preco'];
                    $precoTeclados = number_format($precoTeclados,'2',',','.');
                    echo 'R$'.$precoTeclados.' '.$dadosTeclados['meio_pagamento'];
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