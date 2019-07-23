<?php
if(!isset($_SESSION['kolosus']['id'])){
    ?>
<meta http-equiv="refresh" content="0;index.php?url=login">
<script>alert("Faça login para acessar esta parte do site, por favor!");</script>
<?php
    die();
}
$user=$_SESSION['kolosus']['nome'];
$queryComprado="SELECT * FROM finalizar_compra WHERE nome_comprador='$user'";
$exeQrComprado=$conectar->query($queryComprado)or die(mysql_error());
while($comprado=$exeQrComprado->fetch_assoc()){
    /*['idCompra']=$listaComprado['id_compra'];
    $comprado['nomeComprador']=$listaComprado['nome_comprador'];
    $comprado['emailComprador']=$listaComprado['email_comprador'];
    $comprado['idProduto']=$listaComprado['id_produto_comprado'];
    $comprado['produtoComprado']=$listaComprado['produto_comprado'];
    $comprado['meioPagamento']=$listaComprado['meio_pagamento'];
    $comprado['valorTotal']=$listaComprado['valor_total'];
    $comprado['dataCompra']=$listaComprado['data_compra'];*/
    ?>
<div class="ListaDeProdutosS">
    <div class="titulo_descri qq">          
        <h2 class="H-titulo">
            <?php echo $comprado['produto_comprado'];?>
        </h2>
        <br>
        <span class="H-subititulo">
            <?php echo 'O senhor(a) '.$comprado['nome_comprador'].' comprou o produto '.$comprado['produto_comprado'].' na data '.$comprado['data_compra'].' por ';
            $compradoV = $comprado['valor_total'];$compradoV = number_format($compradoV,'2',',','.');
            echo $compradoV.' '.$comprado['meio_pagamento']?>
        </span>
    </div>
</div>
<?php
}