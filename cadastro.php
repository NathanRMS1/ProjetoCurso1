<br>
<div class="container-fluid">
    <form class="form-horizontal" method="post" action="cadastrar.php">
        <fieldset>
            <div class="form-group">
                <label class="nomesDoForm">Nome</label><br>
                <div class="col-sm-6 formulario">
                    <input type="text" class="form-control" id="inputname" placeholder="Nome" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label class="nomesDoForm">Email</label><br>
                <div class="col-sm-6 formulario">
                    <input type="email" class="form-control" id="email" id="inputEmail3" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="nomesDoForm">Confirmar Email</label><br>
                <div class="col-sm-6 formulario">
                    <input type="email" class="form-control" id="rEmail" placeholder="Confirmar Email" name="repetir_email">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="txtSenha nomesDoForm">Senha</label><br>
                <div class="col-sm-6 formulario">
                    <input type="password" id="txtSenha" name="senha" class="form-control" id="inputpasswordl3" placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="repetir_senha nomesDoForm">Confirmar Senha</label><br>
                <div class="col-sm-6 formulario">
                    <input type="password" id="txtCSenha" name="repetirSenha" class="form-control" placeholder="Confirmar Senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-3">
                    <button type="submit" class="btn btn-default" id="submit">Cadastre-se</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<script type="text/javascript">
jQuery(function(){
    $("#submit").click(function(){
        $(".error").hide();
        var hasError = false;
        var passwordVal = $("#txtSenha").val();
        var checkVal = $("#txtCSenha").val();
        if (passwordVal == '') {
            $("#txtSenha").after('<span class="erro">Por favor, insira uma senha.</span>');
            hasError = true;
        } else if (checkVal == '') {
            $("#txtCSenha").after('<span class="erro">Por favor, repita sua senha corretamente.</span>');
            hasError = true;
        } else if (passwordVal != checkVal ) {
            $("#txtCSenha").after('<span class="erro">As senhas estão diferentes.</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
        var hasError = false;
        var passwordVal = $("#email").val();
        var checkVal = $("#rEmail").val();
        if (passwordVal == '') {
            $("#email").after('<span class="erro">Por favor, insira um e-mail.</span>');
            hasError = true;
        } else if (checkVal == '') {
            $("#rEmail").after('<span class="erro">Por favor, repita seu e-mail corretamente.</span>');
            hasError = true;
        } else if (passwordVal != checkVal ) {
            $("#rEmail").after('<span class="erro">Os e-mails estão diferentes.</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });
});
    
</script>