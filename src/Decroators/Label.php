<?php

namespace Src\Decroators;

use Src\Form;

class Label{
        
    public function __construct(private Form $product)
    {}

    public function add(array $attrs = []){
        $this->product->Add('<label ');
        Setter::attrs($this->product,$attrs,'label');
        Setter::endTag($this->product, 'label', $attrs['value'] ?? '');
        return $this->product;
    }

}