<meta charset="utf-8">
<?php
session_start();
include_once 'cnf/define.php';

#Armazenar dados digitados
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$senhac=md5($senha);
$filtroQr="SELECT * FROM usuarios WHERE email='$email'";# AND senhac='$senhac'
$filtro=$conectar->query($filtroQr);
if(mysqli_num_rows($filtro)>0){
    ?>
    <script>alert("Este e-mail já existe!");</script>
    <meta http-equiv="refresh" content="0;index.php?url=login">
    <?php
}else{
    $queryCadastrar="INSERT INTO usuarios(nome,email,senha,senhac) VALUES('$nome','$email','$senha','$senhac')";
    $resultado=$conectar->query($queryCadastrar)or die("Errou".mysql_error());
    if($resultado){
        echo '<script>alert("Usuário cadastrado");</script>';
        session_destroy();
        include_once 'buscar.php';
    }else{
        echo 'Errou!!1!';
    }
}
?>
