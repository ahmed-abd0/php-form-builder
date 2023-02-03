<?php

namespace Src\Elements;

use Src\Form;

class EndForm extends FormElement {
        
    public function add() {
        return $this->form->Add('</form>');
    }
}