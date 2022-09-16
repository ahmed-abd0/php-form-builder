<?php
namespace Forms;

use Src\Facade\FormBuilder;
use Src\FormComponent;
use Src\IFormBuilder;


class testForm extends FormComponent {
   
    public function Form() : IFormBuilder {
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