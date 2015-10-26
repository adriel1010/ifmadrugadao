<?php
    require './visoes/topo.php';
    require './visoes/menu.php';
    require './visoes/arte.php';
    include 'banco/cunsultaUrl.php';

   $con= new consultar();
   $consul=$con->retorna();
   
  
    
    
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
        
        foreach ($consul as $url) {
            
        
                              
                                echo '</h3>
                                      <center>
                                            <div class="embed-responsive embed-responsive-16by9">';
        
                                echo "<iframe  src='".retornarEmbed($url)."' frameborder='0' allowfullscreen></iframe>";
                                echo "</div>";
                                echo "<br />";
                                
        }
     ?>
          </form>
     </div>
</div>

<?php require './visoes/rodape.php';?>