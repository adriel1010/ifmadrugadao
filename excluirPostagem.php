<?php

 session_start();
   if(!isset($_SESSION['login'])&&!$_SESSION['login']==1){
     $_SESSION['login'] = session_destroy();
      header('Location:controlador.php'); 
   }else{
     
   }

    require './visoes/topo.php';
    require './visoes/menu.php';
    include 'banco/buscarTodos.php';
     
    $buscarTodos = new Buscar();
    $carregamento = $buscarTodos->buscTodos();
     
?>

<div class="row">
    <div class="col-xs-3 col-md-3 col-sm-3">
    </div>
    <div class="col-xs-6 col-md-6 col-sm-6">
        <br/>
        <br/>
        <br/>
        <br/>
        <!-- seta para login.php os valores de usuario e senha atravas do metodo post -->
        <form   id="postagem"  action="banco/controleExcluirPostar.php"  method="post"  >
         
            <p>
                <input name="nome_postagem" type="text" required="true" placeholder="Nome Postagem"/>
            </p>
             <p>
                <input id="btexclui"  class="btn btn-primary" type="submit" value="Excluir" name="btmsubmit"/>
                <input id="btlimp" class="btn btn-primary" type="reset" value="Limpar"/>
            </p>
            <p>
                Postagens:
            </p>
            
             <?php
         foreach ($carregamento as $valor) {
                               
                                echo "<br>".$valor->getNome_postagem()."</b>";
                                echo '<br />';
                                echo '-----------------------------';
             }
             ?>
            
        </form>
    </div>
    <div class="col-xs-3 col-md-3 col-sm-3">
    </div>
</div>


<?php require './visoes/rodape.php';?>
