<?php 
 
 namespace App;

 class Exemplo
 {
     public function __construct(
        protected Produto $produto
     )
     {
        $this->produto = $produto;
     }
 }