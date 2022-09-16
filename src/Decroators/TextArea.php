<?php

namespace Src\Decroators;

use Src\Form;

class TextArea {
        
    public function __construct(private Form $form)
    {}

    public function add(array $attrs = []){
        $this->form->Add('<textarea ');
        Setter::attrs($this->form,$attrs,'textarea');
        Setter::endTag($this->form,'textarea', $attrs['value'] ?? '');
        return $this->form;
    }
}