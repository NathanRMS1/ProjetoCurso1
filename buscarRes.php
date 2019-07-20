<article class="conteudo" style="margin-bottom:10px">
    <div class="col-md-10 col-md-push-1">
        <img src="<?php echo  $produtoBuscado['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
        <p class="InfoProduto text-primary"><?php echo $produtoBuscado['marca'] . ' '.$produtoBuscado['titulo_produto']?></p>
        <a href="index.php?url=Produto&id=<?php echo $produtoBuscado['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
        <a href="?url=carrinhoCompras&Produto=<?php echo $produtoBuscado['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a>
        <span class="precoProduto"><?php
        $precoProduto = $produtoBuscado['preco'];
        $precoProduto = number_format($precoProduto,'2',',','.');
        echo 'R$'.$precoProduto.' '.$produtoBuscado['meio_pagamento'];
        ?></span>
    </div>
</article>