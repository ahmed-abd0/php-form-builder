<?php
namespace test;

require_once('src/builder.php');
require_once('src/BuilderDirectory.php');
use BuilderDir\FormBuilderDir;

class testForm extends FormBuilderDir {
   
    public function Form($action='login.php') : string{
        return $this->formBuilder
                    ->addFirst()
                    ->addF(['class' => 'form-control', 'type' => 'file' , 'single' => ['disabled'] ])
                    ->addTA(['value' => 'test', 'class' => 'form-control'])
                    ->get();
    }

   
}