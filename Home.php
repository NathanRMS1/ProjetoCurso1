<?php include_once 'banner.php';
$conjunto=["Gabinete","PcGamer","Teclado","Mouse","HeadSet","Monitor"];
$contador=0;
$maximo=9;
$max=3;
$linhas=3;

$QueryBuscarDestaques = "SELECT * FROM produtos WHERE promocao LIKE '0' ORDER BY preco ASC";
$ExeQrBuscarDestaques = $conectar->query($QueryBuscarDestaques);

//Vai ter que criar um novo arquivo para exibir os resultados da busca ok
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <!--Destaques-->
        <h1 class="titulos">Destaques</h1>
        <div class="chamadasDestaques">
            <?php
            //é isso
            while(($dadosDestaques = $ExeQrBuscarDestaques->fetch_assoc()) && ($contador<$maximo)){
            ?>
            <article class="conteudo" style="margin-bottom:10px">
                <div class="col-md-10 col-md-push-1">
                    <img src="<?php echo  $dadosDestaques['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                    <p class="InfoProduto text-primary"><?php echo $dadosDestaques['marca'] . ' '.$dadosDestaques['titulo_produto']?></p>
                    <a href="index.php?url=Produto&id=<?php echo $dadosDestaques['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                    <?php if($dadosDestaques['qtd_estoque']>0 && isset($_SESSION['kolosus']['nome'])){?><a href="?url=carrinhoCompras&Produto=<?php echo $dadosDestaques['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a><?php }?>
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
        <?php
        foreach($conjunto as $a){
            ?>
            <h1 class="titulos"><?php echo $a?></h1>
            <div class="DestaquesTeclados">
            <?php
            $QueryBuscar = "SELECT * FROM produtos WHERE tipo_produto LIKE '$a' ORDER BY id DESC";
            $ExeQrBuscar = $conectar->query($QueryBuscar);
            while(($dados = $ExeQrBuscar->fetch_assoc())and($contador<$max)){
            ?>
        <article class="conteudo" style="margin-bottom:10px">
            <div class="col-md-10 col-md-push-1">
                <img src="<?php echo  $dados['img']?>" alt="Destaques Do site" title="Destaques Do Site" class="img-responsive">
                <p class="InfoProduto text-primary"><?php echo $dados['marca'] . ' '.$dados['titulo_produto']?></p>
                <a href="index.php?url=Produto&id=<?php echo $dados['id']?>" class="linkProdutos"><button type="button" class="btn btn-info">Detalhes</button></a>
                <?php if($dados['qtd_estoque']>0 && isset($_SESSION['kolosus']['nome'])){?><a href="?url=carrinhoCompras&Produto=<?php echo $dados['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning">Comprar</button></a><?php }?>
                <span class="precoProduto"><?php
                $preco = $dados['preco'];
                $preco = number_format($preco,'2',',','.');
                echo 'R$'.$preco.' '.$dados['meio_pagamento'];
            ?></span>
            </div>
        </article>
            <?php
                $contador++;
            }
            $contador=0;
            ?></div><?php
        }
        ?>
    </section>
</div>