<?php include_once 'banner.php';
/*Buscar os produtos*/
$QueryBuscarPcGamer = "SELECT * FROM produtos WHERE tipo_produto LIKE 'PcGamer' ORDER BY id DESC";
$ExeQrBuscarPcGamer = $conectar->query($QueryBuscarPcGamer);
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <h1 class="titulos">Pc Gamer</h1>
        <div class="DestaquesPcGamer">
            <?php
            $contador='0';
            $linhas='3';
            while($dadosPcGamer = $ExeQrBuscarPcGamer->fetch_assoc()){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosPcGamer['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosPcGamer['marca'] . ' '.$dadosPcGamer['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosPcGamer['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <a href="?url=carrinhoCompras&Produto=<?php echo $dadosPcGamer['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
                    <span class="precoProduto"><?php
                    $precoPcGamer = $dadosPcGamer['preco'];
                    $precoPcGamer = number_format($precoPcGamer,'2',',','.');
                    echo 'R$'.$precoPcGamer.' '.$dadosPcGamer['meio_pagamento'];
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