<?php

namespace Src\Decroators;

use Src\Form;


class Select{
        
    public function __construct(private Form $form)
    {}

    public function add(array $attrs = [], $options = []){
        $this->form->Add('<select ');
        Setter::attrs($this->form,$attrs,'select');
        Setter::endTag($this->form);
        Setter::options($this->form, $options, $attrs['value'] ?? '');
        Setter::endTag($this->form, 'select');

        return $this->form;

    }
}