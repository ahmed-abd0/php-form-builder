<?php
namespace Src;

require_once('Builder.php');

class FormBuilder{
   
   public static function __callStatic($name, $arguments)
   {
       if($name != 'form')
           throw new \Exception('The Method Called By The Facade Must Be form');
       
           
      return (new FormBuilderClass)->$name(...$arguments);
   }
}