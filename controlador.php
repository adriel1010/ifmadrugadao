<?php
    require './visoes/topo.php';
    require './visoes/menu.php';
    require './visoes/arte.php';
?>
<div class="row">
    <div class="col-xs-3 col-md-3 col-sm-3">
    </div>
    <div class="col-xs-6 col-md-6 col-sm-6">
        <form id="login"  action="banco/conexao.php" method="post">
            <h4><center>Painel Administrativo</center></h4>
            <p>
                <input name="usuario" type="text" required="true" placeholder="Usuário"/>
            </p>
            <p>
                <input name="senha" type="password" required="true" placeholder="Senha"/>
            </p>
            <p>
                <input type="submit" value="Logar"/>
                <input type="button" value="Limpar"/>
            </p>
        </form>
    </div>
    <div class="col-xs-3 col-md-3 col-sm-3">
    </div>
</div>


<?php require './visoes/rodape.php';?>