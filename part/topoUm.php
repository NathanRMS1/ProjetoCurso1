<nav class="menu navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-1" aria-expanded="false">
                <span class="sr-only bg-primary">Topo unooo</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="top-1">
            <a class="navbar-brand" href="index.php"><img alt="Logotipo" class="logotipoDoSite"src="img/logodosite.png"></a>
            <?php
            if(isset($_SESSION['kolosus']['nome'])){
            ?>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Bem vindo Sr.<?php echo lmWord($_SESSION['kolosus']['nome'],12);?></a></li>
                <li><a href="index.php?logout">Logout</a></li>
                <?php
                if(isset($_SESSION['kolosus']['nivel'])){
                    $nivel = $_SESSION['kolosus']['nivel'];
                    if($nivel=='1'){
                ?>
                <br>
                <li><a href="?url=uploadProduto">upload filé</a></li>
                <?php
                    }
                }else{
                    $nivel = $_SESSION['kolosus']['nivel'];
                    echo $nivel;
                }
                ?>
            </ul>
            <?php
            }else{
            ?>
            <ul class="nav navbar-nav">
                <li><a href="?url=cadastro">Cadastrar-se</a></li>
                <li><a href="?url=login">Login</a></li>
            </ul>
            <?php
            }
            ?>
            <form class="barra" action="?url=buscarProduto" method="post">
                <div class="col-sm-5 barraDeNavegar">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Buscar" name="buscarProdutos">
                    <input type="submit" name="btnBuscar" class="escondido">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['kolosus']['nome'])){
                ?>
                <li class="listaDeRedes"><a href="?url=carrinhoDeCompras"><img alt="rede" src="img/carrinho.png"></a></li>
                <?php
                }
                ?>
                <li class="listaDeRedes"><a href="#"><img alt="rede" src="img/twitter.png"></a></li>
                <li class="listaDeRedes"><a href="#"><img alt="rede" src="img/facebook.png"></a></li>
                <li class="listaDeRedes"><a href="#"><img alt="rede" src="img/instagram.png"></a></li>
                <li class="listaDeRedes"><a href="#"><img alt="rede" src="img/youtube.png"></a></li>
            </ul>
        </div>
    </div>
</nav>