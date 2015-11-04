<?php
  
   session_start();
   if(!isset($_SESSION['login'])&&!$_SESSION['login']==1){
   session_destroy();
   header('Location:controlador.php'); 
 }else{
   session_destroy();
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
        <form   id="postagem"  action="banco/postagem.php"  method="post"  >
            <h4><center>Painel de Postagem </center></h4>
            <p>
                <input name="nome_imagem" type="text" required="true" placeholder="Titulo Da Imagem"/>
            </p>
            <p>
                <input name="url" type="text" required="true" placeholder="URL"/>
            </p>
            <p>
                <input  name="descricao" type="text" required="true" placeholder="Descrição"/>
            </p>
            <p>
                Categoria: 
                <input name="categoria" type="radio" value="video"/> Video
                <input name="categoria" type="radio" value="imagem"/> Imagem
                
            </p>
            <p>
                <input id="btpostar"  class="btn btn-primary" type="submit" value="Postar" name="btmsubmit"/>
                <input id="btlimpa" class="btn btn-primary" type="reset" value="Limpar"/>
            </p>
        </form>
    </div>
    <div class="col-xs-3 col-md-3 col-sm-3">
    </div>
</div>


<?php require './visoes/rodape.php';?>