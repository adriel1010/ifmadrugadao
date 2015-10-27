<?php

class Adm{
    function Adm(){}
    
    
    private $url;
    private $descricao;
    private $id;


    public function getId() { return $this->id; } 
    public function setId($id) { $this->id = $id; }
    
    
    public function getUrl() { return $this->url; } 
    public function setUrl($url) { $this->url = $url; }
    
    public function getDescricao() { return $this->descricao; } 
    public function setDescricao($descricao) { $this->descricao = $descricao; }
    
}

?>
