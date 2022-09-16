<?php

namespace Src\Decroators;

use Src\Form;


class Input{
        
    public function __construct(private Form $form)
    {}

    public function add($attrs = []){
        $this->form->Add('<input ');
        Setter::attrs($this->form,$attrs);
        Setter::endTag($this->form);
        return $this->form;
    
    }


}