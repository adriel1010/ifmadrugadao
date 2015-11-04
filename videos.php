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
        <div id="quadropostagem" style=" width: 60%; margin-left: 20%;
    ">
            
            
      
        <?php
         foreach ($carregamento as $valor) {
             
             if($valor->getCategoria()== 'video'){
                                echo '<center>';
                                echo '<br />';
                                echo "<br>".$valor->getNome_postagem()."</b>";
                                echo '<br />';
                                echo "</center>";
                                echo '</h3>
                                      <center>
                                            <div class="embed-responsive embed-responsive-16by9">';
                                echo "<center>";
                                echo "<iframe  src='".retornarEmbed($valor->getUrl())."' frameborder='0' allowfullscreen></iframe>";
                                echo "</center>";
                                echo "</div>";
                                echo '<br /';
                                echo "<br>".$valor->getDescricao()."</b>";
                                echo '<br />';
                                echo '<br />';
                                echo '-----------------------------------------------------------------';
             }                       
        }
        
        
     ?>
            
         
          </div>
     
      
     </div>
</div>

<?php require './visoes/rodape.php';?>