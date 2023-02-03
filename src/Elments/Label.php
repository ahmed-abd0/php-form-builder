<?php

namespace Src\Elements;

use Src\Form;

class Label extends FormElement {
        

    public function add(array $attrs = []) {
       return $this->form->Add('<label ')->setAttrs($attrs, "label")->setEndTag("label", $attrs["value"]); 
    }

}