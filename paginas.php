<?php include_once 'banner.php';
/*Buscar os produtos*/
if(isset($_GET['url'])){$url = $_GET['url'];}else{echo '<!--<meta http-equiv="refresh" content="0;index.php">-->';}
$QueryBuscar = "SELECT * FROM produtos WHERE tipo_produto LIKE '$url' ORDER BY id DESC";
$ExeQrBuscar = $conectar->query($QueryBuscar);
if($ExeQrBuscar->num_rows==0){
    echo '<meta http-equiv="refresh" content="0;index2.php">';
}else{}
?>
<div class="container-fluid">
    <section class="ConteudoDoSite">
        <h1 class="titulos"><?php echo "$url";?></h1>
        <div class="DestaquesHeadSet">
            <?php
            $contador='0';
            $linhas='3';
            while($dados = $ExeQrBuscar->fetch_assoc()){
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