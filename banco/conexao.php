<?php


class Conexao{

function conectar(){
    // faz a conexao  com o banco ifmadrugadao
try{
$pdo = new PDO("mysql:host=localhost;dbname=ifmadrugadao","root","");
  // se der erro, mostra qual é o erro 
}  catch (PDOException $e){
    echo $e->getMessage();
  
}
return $pdo;
}

}
 ?>