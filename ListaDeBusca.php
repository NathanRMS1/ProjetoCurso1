<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/logo.png">
		<title>Kolosus <?php if(isset($_GET['url'])){echo '- '.str_replace('_',' ',$_GET['url']);}?></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
		<link href="css/ProdutosLista.css" rel="stylesheet">
	</head>
	<body class="body">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<?php include_once 'part/topoUm.php';?>
        <?php include_once 'part/topoDois.php';?>
		<div class="container-fluid">
			<section class="">
				<div class="ListaDeProdutosS">
					<div class="col-md-2">
						<img class="produtoNaLista" src="img/aaaaddd.jpg" title="produto na lista">
					</div>
					<div class="titulo_descri">          
 						<span class="H-titulo">
						<a href="#">a</a>
						</span>
					<br>
						<span class="H-subititulo">
							Informação sobre o Produto fica aqui XD
						</span>
					</div>
					<div class="BotsEmLista">
						<a href="index.php?url=Produto&id=<?php echo $dadosDestaques['id']?>" class="linkProdutos"><button type="button" class="btn btn-info BotsLista">Detalhes</button></a>
						<a href="?url=carrinhoCompras&Produto=<?php echo $dadosDestaques['id']?>" class="AddCarrinho"><button type="button" class="btn btn-warning BotsLista">Comprar</button></a>
					</div>
					<div class="PrecosEmLista">
						<div class="precoAvista">
							<b> R$:20.000 </b>
						</div>
						<div class="Estoque">
							<b> há xxxx no estoque XD</b>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>
