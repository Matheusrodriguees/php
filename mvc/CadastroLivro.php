<?php
require_once("banco.php");

class Cadastro extends Banco{
    
    private $nome;
    private $autor;
    private $quantidade;
    private $preco;
    private $flag;
    private $data;
    
    
    public function setNome($String){
        $this->nome = $String;
    }
    public function setAutor($String){
        $this->autor = $String;
    }
    public function setQuantidade($String){
        $this->quantidade = $String;
    }
    public function setPreco($String){
        $this->preco = $String;
    }
    public function setFlag($String){
        $this->flag = $String;
    }
    public function setData($String){
        $this->data = $String;
    }
    
    
    public function getNome($String){
        return $this->nome;
    }
    public function getAutor($String){
        return $this->autor;
    }
    public function getQuantidade($String){
        return $this->quantidade;
    } 
    public function getPreco($String){
        return $this->preco;
    }
    public function getFlag($String){
        return $this->flag;
    } 
    public function getData($String){
        return $this->data;
    }
    
    public function incluir(){
        return $this->setLivro($this->getNome(),$this->getAutor(),$this->getQuantidade(),$this->getPreco(),$this->getData());
    }
}

?>