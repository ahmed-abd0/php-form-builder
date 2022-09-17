<?php

namespace Src\Decroators;

use Src\Form;

class Html {
        
    public function __construct(private Form $product)
    {}

    public function add($html){
        $this->product->Add($html);
        return $this->product;
    }
}