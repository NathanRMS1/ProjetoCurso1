<?php
if(isset($_GET['logout'])){
	echo '<meta http-equiv="refresh" content="0;index.php">';
}
?>
<br>
<div class="container-fluid">
    <form class="form-horizontal" method="post" action="buscar.php">
        <div class="form-group">
            <label class="nomesDoForm">Email</label><br>
            <div class="col-sm-6 formulario">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="nomesDoForm">Senha</label><br>
            <div class="col-sm-6 formulario">
                <input type="password" class="form-control" id="inputpasswordl3" placeholder="Senha" name="senha">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-0 col-sm-3">
                <button type="submit" class="btn btn-default">Logar</button>
            </div>
        </div>
    </form>
</div>