<?php
//Pra buscar, faz assim
if(!isset($_SESSION['kolosus']['id'])){
    ?>
<meta http-equiv="refresh" content="0;index.php?url=login">
<script>alert("Faça login para comprar, por favor!");</script>
<?php
    die();
}
$iDCompraProduto = $_GET['Produto'];//Aqui, coloca o GET do id do produto para comprar
$ExeQrBuscarProdutosBanco = $conectar->query("SELECT * FROM produtos WHERE id = '$iDCompraProduto'");//Aqui é fazendo a procura do produto
$ResLinhas = mysqli_num_rows($ExeQrBuscarProdutosBanco) > 0;

//Verificar se encontrou o produto na tabela
if($ResLinhas){
    //Se encontrar, armazenar as info do produto
    while($produtoC = $ExeQrBuscarProdutosBanco->fetch_assoc()){
        
        //Armazenar a compra no banco de dados
        date_default_timezone_set('America/Sao_Paulo');
        //Armazenar o produto comprado
        $produtoComprado['produto_comprado'] = $produtoC['tipo_produto']." ".$produtoC['marca']." ".$produtoC['titulo_produto'];
        $comprador['nome']=$_SESSION['kolosus']['nome'];
        $comprador['email']=$_SESSION['kolosus']['email'];
        /*Colocar abaixo, todos os dados para armazenar, vai ficar mais fácil...*/
        $produtoComprado['data_compra'] = date('d/m/Y');//Isso apresenta a data atual
        $QueryArmazenarCompra="INSERT INTO finalizar_compra(nome_comprador,email_comprador,id_produto_comprado,produto_comprado,meio_pagamento,valor_total,data_compra) VALUES ('$comprador[nome]','$comprador[email]','$produtoC[id]','$produtoComprado[produto_comprado]','$produtoC[meio_pagamento]','$produtoC[preco]','$produtoComprado[data_compra]')";
        $ExeQrArmazenarCompra = $conectar->query($QueryArmazenarCompra)or die(mysql_error());
        if(isset($ExeQrArmazenarCompra)){
            ?>
            <script>
                alert("Compra finalizada");
            </script>
            <meta http-equiv="refresh" content="0;index.php">
            <?php
        }else{
            ?>
            <script>
                alert("Erro!!!");
            </script>
            <?php
        }
    }
}
?>