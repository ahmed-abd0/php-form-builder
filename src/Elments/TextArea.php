<?php

namespace Src\Elements;

use Src\Form;

class TextArea extends FormElement {

    public function add(array $attrs = []) {
       return $this->form->Add("<textarea ")->setAttrs($attrs, "textarea")->setEndTag("textarea", $attrs["value"] ?? ""); 
    }
}