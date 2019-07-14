<meta charset="utf-8">
<?php
	require_once 'cnf/config.php';
	#query para consultar dados
	$email = $_POST['email'];
    $senha=$_POST['senha'];
	$senhac=md5($senha);
	$exeQrConsultarUsuarios=$conectar->query("SELECT * FROM usuarios WHERE email='$email' AND senhac='$senhac'")or die(mysql_error());
	#Verificar quantidade de linhas
	$linhas=mysqli_num_rows($exeQrConsultarUsuarios);
	if($linhas > 0){
		while($resultado=$exeQrConsultarUsuarios->fetch_assoc()){
            session_start();
            $_SESSION['kolosus']=$resultado;
            ?>
            <meta http-equiv="refresh" content="0;index.php">
            <?php
        }
	}else{
		?>
        <script>alert("Não achei nada");</script>
        <meta http-equiv="refresh" content="0;index.php"><?php
	}
?>