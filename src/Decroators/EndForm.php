<?php

namespace Src\Decroators;

use Src\Form;

class EndForm {
        
    public function __construct(private Form $product)
    {}

    public function add(){
        $this->product->Add('</form>');
        return $this->product;
    }
}