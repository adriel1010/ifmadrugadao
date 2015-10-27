<?php

include 'conexao.php';

class consultar{
    
function retorna(){
    
$pdoo= new Conexao();

$pdo=$pdoo->conectar();

$urls = array();
    
$buscarPostagem=$pdo->prepare("select * from postagem");
$buscarPostagem->execute();
$cont = 0;

$url = $buscarPostagem->fetchAll(PDO::FETCH_ASSOC);
foreach ($url as $lista) {
   $urls[$cont] = $lista["url"];
   $cont++;
}
 //echo print_r($urls);

/*while($url = $buscarPostagem->fetchA(PDO::FETCH_ASSOC)){

    $urls[$cont] = $url["url"];
    $cont++;

    echo print_r($urls);   
}

*/
return $urls;

   }
   
   /*
    
function retornadescri(){
    
$pdoo= new Conexao();

$pdo=$pdoo->conectar();
    
$descricao = array();
    
$buscarPostagem=$pdo->prepare("select * from postagem");
$buscarPostagem->execute();
$cont = 0;

$descri = $buscarPostagem->fetchAll(PDO::FETCH_ASSOC);
foreach ($descri as $lista) {
   $descricao[$cont] = $lista["descricao"];
   $cont++;
}
return $descricao;
    }
*/
   
}

?>
