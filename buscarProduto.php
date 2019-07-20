<?php
if(isset($_POST['btnBuscar'])){
    $Buscar = $_POST['buscarProdutos'];
    $ExeQrBuscarProdutosTipoP = $conectar->query("SELECT * FROM produtos WHERE tipo_produto LIKE '%$Buscar%'")or die(mysql_error());
    $LinhasBuscarProdutosTipoP = mysqli_num_rows($ExeQrBuscarProdutosTipoP) > 0;
    $ExeQrBuscarProdutosMarca = $conectar->query("SELECT * FROM produtos WHERE marca LIKE '%$Buscar%'")or die(mysql_error());
    $LinhasBuscarProdutosMarca = mysqli_num_rows($ExeQrBuscarProdutosMarca) > 0;
    $ExeQrBuscarProdutosTitul = $conectar->query("SELECT * FROM produtos WHERE titulo_produto LIKE '%$Buscar%'")or die(mysql_error());
    $LinhasBuscarProdutosTitul = mysqli_num_rows($ExeQrBuscarProdutosTitul) > 0;
    $ExeQrBuscarProdutosDescr = $conectar->query("SELECT * FROM produtos WHERE detalhes_produto LIKE '%$Buscar%'")or die(mysql_error());
    $LinhasBuscarProdutosDescr = mysqli_num_rows($ExeQrBuscarProdutosDescr) > 0;
    ?>
    <h1 class="titulos">Resultados</h1>
    <div class="chamadasDestaques">
    <?php
    if($LinhasBuscarProdutosTipoP){
        while($produtoBuscado = $ExeQrBuscarProdutosTipoP->fetch_assoc()){
            include "buscarRes.php";
        }
        echo '<script>alert("passou 1");</script>';
    }else{
        if($LinhasBuscarProdutosMarca){
            while($produtoBuscado = $ExeQrBuscarProdutosMarca->fetch_assoc()){
                include_once "buscarRes.php";
            }
            echo '<script>alert("passou 2");</script>';
        }else{
            if($LinhasBuscarProdutosTitul){
                while($produtoBuscado = $ExeQrBuscarProdutosTitul->fetch_assoc()){
                    include_once "buscarRes.php";
                }
                echo '<script>alert("passou 3");</script>';
            }else{
                if($LinhasBuscarProdutosDescr){
                    while($produtoBuscado = $ExeQrBuscarProdutosDescr->fetch_assoc()){
                        include_once "buscarRes.php";
                    }
                    echo '<script>alert("passou 4");</script>';
                }else{
                    echo '<script>alert("passou nada :/");</script>';
                    include_once "404produtos.php";
                }
            }
        }
    }
    ?>
    </div>
    <?php
}