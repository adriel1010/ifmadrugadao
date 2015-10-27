<?php

include 'conexao.php';

class consultarDescricao{
    
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
//echo print_r($descricao);
  }
  }


?>
