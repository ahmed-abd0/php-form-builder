<?php

namespace Src\Decroators;

use Src\Form;

class FormStart{
        
    public function __construct(private Form $form)
    {}

    public function add(array $attrs = []){
        $this->form->Add('<form ');
        Setter::attrs($this->form,$attrs);
        Setter::endTag($this->form);
    
        return $this->form;

    }

}