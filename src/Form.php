<?php

namespace Src;

class Form{
    private array $form = [];

  
    public function Add(string $item){
        $this->form[] = $item;  
    }

    public function getProduct(){
       return join($this->form);
    }

}