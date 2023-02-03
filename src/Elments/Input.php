<?php

namespace Src\Elements;

use Src\Form;


class Input extends FormElement {
        
    public function add($attrs = []){
        return $this->form->Add('<input ')->setAttrs($attrs)->setEndTag();
    }

}