<?php
namespace Src\Facade;

use Src\FormBuilderClass;

class FormBuilder extends Facade{
    protected static function instance(){
        return new FormBuilderClass() ;
    }   
}