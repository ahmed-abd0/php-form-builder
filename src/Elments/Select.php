<?php

namespace Src\Elements;

use Src\Form;


class Select extends FormElement {
        

    public function add(array $attrs = [], $options = []) {
        return $this->form->Add('<select ')
                    ->setAttrs($attrs, "select")
                    ->setEndTag()
                    ->setSelectOptions($options, $attrs['value'] ?? '')
                    ->setEndTag();
    }
}