<?php

namespace Src\Elements;

use Src\Form;

class FormStart extends FormElement {
        

    public function add(array $attrs = []) {
        return $this->form->Add('<form ')->setAttrs($attrs)->setEndTag();
    }

}