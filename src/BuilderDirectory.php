<?php
namespace BuilderDir;

use builder\FormBuilder;

abstract class FormBuilderDir {
    private function __construct(protected FormBuilder $formBuilder)
    {
    }
   
    public static function make(FormBuilder $formBuilder){
        return new static($formBuilder);
    }

    public function __toString()
    {
        return $this->Form();
    }

    abstract public function  Form() : string ;
}