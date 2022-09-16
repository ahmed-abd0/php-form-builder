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

            if($input->type != 'checkbox' && $input->type != 'radio')
                $input->{'value'} = $value;
            
            if($input->type == 'checkbox' && $input->value == $value)
                $input->{'checked'} = true;

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

          

        }

        return $form;
        
    }


    public function __toString()
    {
        return $this->Form()->get();
    }

    abstract public function  Form() : IFormBuilder ;
}