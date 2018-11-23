<?php

class Produto {
    private $id, $nome, $preco, $quantidade, $soma;

    function __construct($id = NULL, $nome = NULL, $preco = NULL, $quantidade = NULL, $soma = NULL) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->soma = $soma;
       
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }
    function getSoma() {
        return $this->soma;
    }
    function getQuantidade() {
        return $this->quantidade;
    }
    
    
     

    function setId($id) {
      $this->id = $id;
    }

    function setNome($nome) {
       $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
       
    }
    function setSoma($soma) {
        $this->soma = $soma;
       
    }
    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    
    

}


