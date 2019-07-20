<?php include_once 'banner.php';
/*Buscar os produtos*/
$QueryBuscarMouse = "SELECT * FROM produtos WHERE tipo_produto LIKE 'Mouse' ORDER BY id DESC";
$ExeQrBuscarMouse = $conectar->query($QueryBuscarMouse);
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <h1 class="titulos">Mouse</h1>
        <div class="DestaquesMouse">
            <?php
            $contador='0';
            $linhas='3';
            while($dadosMouse = $ExeQrBuscarMouse->fetch_assoc()){
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