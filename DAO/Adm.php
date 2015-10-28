<?php

class Adm{
    function Adm(){}
    
    
    private $url;
    private $descricao;
    private $id;
    private $categoria;
    private $nome_postagem;


    public function getId() { return $this->id; } 
    public function setId($id) { $this->id = $id; }
    
     public function getNome_postagem() { return $this->nome_postagem; } 
    public function setNome_postagem($nome_postagem) { $this->nome_postagem = $nome_postagem; }
    
    
    public function getUrl() { return $this->url; } 
    public function setUrl($url) { $this->url = $url; }
    
    public function getDescricao() { return $this->descricao; } 
    public function setDescricao($descricao) { $this->descricao = $descricao; }
  
    public function getCategoria() { return $this->categoria; } 
    public function setCategoria($categoria) { $this->categoria = $categoria; }
}

?>
