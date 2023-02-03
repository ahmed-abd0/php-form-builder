<?php

namespace Src\Elements;


class Html extends FormElement {

    public function add($html){
        return $this->form->Add($html);
    }
}