<?php
    require './visoes/topo.php';
    require './visoes/menu.php';
?>

<form id="testando"  action="banco/conexao.php" method="post"  >
    
    <h4 id="paineladm"> Painel Administrativo</h4>
    <p>
    <input name="usuario" type="text" required="true" placeholder="Usuario"/>
    </p>
    <p>
    <input name="senha" type="password" required="true" placeholder="Senha"/>
    </p>
    <p>
    <input type="submit" value="Logar"/>
    </p>
   
</form>
<?php require './visoes/rodape.php';?>