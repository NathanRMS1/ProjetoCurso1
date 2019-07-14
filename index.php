<!doctype html>
<?php
require_once 'cnf/config.php';
if(isset($_GET['logout'])){
	session_start();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0;index.php">';
}else{
	session_start();
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/logo.png">
		<title>Kolosus <?php if(isset($_GET['url'])){echo '- '.str_replace('_',' ',$_GET['url']);}?></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
	</head>
	<body class="body">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!--topo 1-->
		<?php include_once 'part/topoUm.php';?>
		<!-- FIM DO TOPO 1-->
        <?php include_once 'part/topoDois.php';?>
        <!--fim do topo2-->
        <!--conteudo do site-->
        <div class="container-fluid">
            <section class="ConteudoDoSite">
                <?php
                if(isset($_GET['url'])){
                    $url = $_GET['url'];
                    if (in_array($url,["Gabinete","PcGamer","Teclado","Mouse","HeadSet","Monitor"])){include_once "paginas.php";}else{
                        if(file_exists($url.'.php')){
                            switch($url){
                                case $url:include_once $url . '.php'; break;

                                default: include_once '404.php';
                            }
                        }else{
                            include_once '404.php';
                        }
                    }
                }else{
                    include_once 'Home.php';
                }
				/*if(file_exists($url.'.php')){
					switch($url){
						case $url:include_once $url . '.php'; break;

						default: include_once '404.php';
					}
				}else{
					include_once '404.php';
				}*/
                ?>
            </section>
        </div>
        <div class="container-fluid">
            <footer div="rodapeDoSite">
                <section class="rodape">
                    <div class="rodapeDoRodape">
                        <img src="img/logodosite.png" alt="logotipo do site" title="logotipo do site">
                    </div>
                    <div class="slogan">Melhor site de eletronicos do imalaia</div>
                </section>
	       </footer>
        </div>
    </body>
</html>