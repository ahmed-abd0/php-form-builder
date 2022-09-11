<?php
namespace Forms;

use Src\FormBuilder;
use Src\FormComponent;

require_once ('src/Facade.php');
require_once('src/FormComponent.php');

class testForm extends FormComponent {
   
    public function Form() {
        return FormBuilder::form(['action' => 'test.php', 'method' => 'post'])
                    ->input(['type' => 'file', 'name' => 'file' ,'class' => 'form-control'])
                    ->select(['class' => 'form-control', 'name' => 'select'], [ 'key1'=>'ahmed', 'key2' => 'mohamed', 'key3' => 'abdo'])
                    ->textarea([ 'name' => 'text','class' => 'form-control'])
                    ->input(['type' => 'checkbox', 'name' => 'check' ,'value' => 'ahmed'])
                    ->input(['type' => 'radio', 'name' => 'radio' ,'value' => 'ahmed'])
                    ->html('<br>')
                    ->input(['type' => 'submit', 'value' => 'Submit', 'class' => ' btn btn-primary mt-3'])
                    ->endForm();
    }

   
}