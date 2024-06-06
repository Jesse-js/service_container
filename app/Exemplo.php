<?php 
 
 namespace App;

 class Exemplo
 {
     public function __construct(
        protected Produto $produto,
        // protected int $number //this ode wil trigger an error
     )
     {
        $this->produto = $produto;
     }
 }