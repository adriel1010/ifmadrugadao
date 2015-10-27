<?php
    require './visoes/topo.php';
    require './visoes/menu.php';
    require './visoes/arte.php';
    include 'banco/buscarTodos.php';
    
    $buscarTodos = new Buscar();
    $carregamento = $buscarTodos->buscTodos();
    
    
  function retornarEmbed($url){
    $urlEmbed = str_replace("watch?v=", "embed/", $url);
    $urlEmbed = str_replace("&feature=youtu.be", "", $urlEmbed);
   return $urlEmbed; 
}
?>

<div id="fundoconteudo" class="well well-small">
    <div id="conteudo" class="well well-small"  >
        <form id="quadropostagem">
            
            
        <?php
         foreach ($carregamento as $valor) {
         echo '</h3>
                                      <center>
                                            <div class="embed-responsive embed-responsive-16by9">';
                                echo "<center>";
                                echo "<iframe  src='".retornarEmbed($valor->getUrl())."' frameborder='0' allowfullscreen></iframe>";
                                echo "</center>";
                                echo "</div>";
                                echo "<br /";
                                echo "<br>".$valor->getDescricao()."</b>";
                                echo "<br />";
                                echo "<br />";
                             
                                
        }
        
        
     ?>
          </form>
     </div>
</div>

<?php require './visoes/rodape.php';?>