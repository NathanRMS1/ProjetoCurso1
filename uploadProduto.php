<?php
if(!isset($_SESSION['kolosus']['id'])){
    ?>
    <meta http-equiv="refresh" content="0;index.php?url=login">
    <script>alert("Faça login para comprar, por favor!");</script>
<?php
    die();
}else if($_SESSION['kolosus']['nivel']==0){
    ?>
    <meta http-equiv="refresh" content="0;index.php">
    <script>alert("Você não deveria estar aqui :P");</script>
<?php
}
?>
<div class="form">
    <form method="post" enctype="multipart/form-data">
        <div>
            <label>
                <span>Insira a imagem(não deve haver espaços no nome da imagem)</span>
            </label>
            <br>
            <label>
                <input class="btn btn-default" type="file" name="file">
            </label>
            <br>
            <label>
                <span>Tipo do produto</span>
                <!--<input type="text" placeholder="Tipo do produto" name="tipoProduto" class="form-control">-->
                <select name="tipoProduto">
                    <option value="Gabinete">Gabinete</option>
                    <option value="PcGamer">Pc Gamer</option>
                    <option value="Teclado">Teclado</option>
                    <option value="Mouse">Mouse</option>
                    <option value="Headset">HeadSet</option>
                    <option value="Monitor">Monitor</option>
                </select>
                <input type="text" placeholder="Marca do produto" name="marca" class="form-control">
                <input type="text" placeholder="Titulo do produto" name="tituloProduto" class="form-control">
                <input type="text" placeholder="Preço do produto" name="preco" class="form-control">
                <input type="text" placeholder="Promoção (opcional)" name="promocao" value="0" class="form-control">
                <input type="text" placeholder="Meio de pagamento" name="meioPagamento" value="À Vista" class="form-control">
                <input type="number" placeholder="Quantidade no estoque" name="qtdEstoque">
            </label>
            <input type="text" placeholder="Detalhes detalhados" name="detalhesProduto" class="form-control">
        </div>
        <br>
        <div>
            <input class="btn btn-default" type="submit" name="startUpload" value="Fazer Upload">
            <input class="btn btn-danger" type="reset" name="" value="Limpar Form">
        </div>
    </form>
</div>
<?php
date_default_timezone_set('America/Sao_Paulo');
if(isset($_POST['startUpload'])){
    #Armazenar o arquivo
    $arquivo = $_FILES['file'];
    #Validar Permissões de extensões
    $tiposPermitidos = array('image/jpg','image/jpeg','image/pjpeg','image/png');
    #Configurar/Manipular extensões
    $extensaoArquivos = ($arquivo['type'] == 'image/png' ? '.png' : '.jpg');
    #Limitar o tamanho do arquivo
    $tamanhoMax = 1024*1024*8; //8MB
    if($arquivo['size'] > $tamanhoMax){
        echo 'O arquivo é muito grande, escolha outro';
    }else if(!in_array($arquivo['type'],$tiposPermitidos)){
        echo 'Tipo de arquivo não permitido, somente JPG ou PNG';
    }else{
        #Nome do arquivo
        $nomeArquivo = date("d-m-YH-i-s").$arquivo['name'];
        if(move_uploaded_file($arquivo['tmp_name'] , 'img/produtos/' . $nomeArquivo)){
            // Insert das informações no banco de dados
            $img = 'img/produtos/' . $nomeArquivo;
            $tipo_produto=$_POST['tipoProduto'];
            $marca=$_POST['marca'];
            $titulo_produto=$_POST['tituloProduto'];
            $preco=$_POST['preco'];
            $preco=str_replace('.','',$preco);
            $preco=str_replace(',','.',$preco);
            $preco=str_replace('R','',$preco);
            $preco=str_replace('$','',$preco);
            $promocao=$_POST['promocao'];
            $meio_pagamento=$_POST['meioPagamento'];
            $detalhes_produto=$_POST['detalhesProduto'];
            $qtd_estoque=$_POST['qtdEstoque'];
            $SQLInserirDBA = "INSERT INTO produtos(img,tipo_produto,marca,titulo_produto,preco,promocao,meio_pagamento,detalhes_produto,qtd_estoque) VALUES('$img','$tipo_produto','$marca','   $titulo_produto','$preco','$promocao','$meio_pagamento','$detalhes_produto','$qtd_estoque')";
            $query = $conectar->query($SQLInserirDBA)or die(mysql_error());
            if(isset($query)){
                echo 'Arquivo en viado com sucesso!<br>';
            }else{
                echo 'arquivo não enviado';
            }
        }else{
            echo 'Alguma coisa errada não está certa!';
        }
    }
}
?>