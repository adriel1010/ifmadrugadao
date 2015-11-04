<?php
    session_start();
   if(!isset($_SESSION['login'])&&!$_SESSION['login']==1){
    session_destroy();
   header('Location:controlador.php');
   
   }else{
 
   }
   
    require './visoes/topo.php';
    require './visoes/menu.php';
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
              <input id="btposts"  class="btn btn-primary" type="submit" name="btpost" value="Postar" />
              <input id="btexcluir" class="btn btn-primary" type="submit" name="btexclui" value="Excluir"/>
            </p>
        </form>
    </div>
    <div class="col-xs-3 col-md-3 col-sm-3">
    </div>
</div>


<?php require './visoes/rodape.php';?>
