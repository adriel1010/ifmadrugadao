<?php

include './DAO/Adm.php';
include 'conexao.php';

class Buscar{
    
private $pdo;

function Buscar(){
        
 $this->pdo = new Conexao();

 $this->pdo= $this->pdo->conectar();
  
}

 public function buscTodos(){
        
           try{
            
            $sql = "SELECT * FROM postagem ORDER by id DESC ";
            $result = $this->pdo->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            
            foreach ($lista as $l){
                $f_lista[] = $this->populaUsuario($l);
            }
           
            return $f_lista;
              }       
        catch (Exception $e){
     
     print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
         
 }
        
    }
       private function populaUsuario($row){
        $adm = new Adm();
        $adm ->setId($row['id']);
        $adm ->setNome_postagem($row['nome_imagem']);
        $adm ->setUrl($row['url']);
        $adm ->setDescricao($row['descricao']);
        $adm ->setCategoria($row['categoria']);
        
        
        return $adm;
    }
    
   
    
}

?>
