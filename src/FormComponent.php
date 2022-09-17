<?php
namespace Src;


require_once('simple_html_dom.php');

abstract class FormComponent {
    private function __construct()
    {}
   
    public static function create(){
        return new static;
    }

   

    private function handelInputs($inputs, $value){

        foreach ($inputs as $input){

            
            if($input->type != 'checkbox' && $input->type != 'radio'){
                $input->{'value'} = $value;
                continue;
            }
       

            if($input->type == 'radio' && $input->value == $value)
                $input->{'checked'} = true;
        }  
    }

    public function model(array $model = [], $action = null){
        
        $form = str_get_html($this->Form()->get());
          
        if($action)
          $form->find('form',0)->{'action'} = $action;
  
     
        foreach($model as $name=>$value){
            $input = $form->find("[name=$name]", 0);
            $inputs = $form->find("input[name=$name]");
            $checks = $form->find("input[name*=$name][type=checkbox]");

            if($input){
                if($input->tag === 'select'){
                    $input->find("option[value=$value]", 0)->{'selected'} = true;
                    continue;
                }

                if($input->tag === 'textarea'){
                    $input->innertext = $value;
                    continue;
                }
            }
          

            if($inputs)
                $this->handelInputs($inputs, $value);
            
            
            if($checks){
                foreach($checks as $check){
                    if(is_array($value) && in_array($check->value, $value)){
                        $check->{'checked'} = true;
                        continue;
                    }

                    if($check->value == $value)
                        $check->{'checked'} = true; 
                }
            }

          

        }

        return $form;
        
    }


    public function __toString()
    {
        return $this->Form()->get();
    }

    abstract public function  Form() : IFormBuilder ;
}