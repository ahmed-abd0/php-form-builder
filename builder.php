<?php

namespace builder;

use function PHPSTORM_META\type;

interface FormBuilder{

    
    public static function start(array $attrs);
    public  function addF(array $attrs);
    public  function addTA(array $attrs);
    public  function endf();
    public  function get();

}

class Product{
    private array $List = [];

    public function Add(String $item){
        array_push($this->List , $item);
    }

    public function getProduct(){
        $form = join($this->List);
        return  $form;
    }

}


class Form implements FormBuilder{

    private  Product $product;

    private static $instance = null;

    private function __construct(){}

    public static function start(array $attrs = []){
        if(self::$instance  == null){
            self::$instance   = new Form();
        }
        return self::$instance->addFirst($attrs);
    }

    
    private function addFirst(array $attrs = []){
        $this->product = new Product();
        $this->product->Add('<form ');
        $this->setAttrs($attrs);
        return $this;
    }


    public   function addF(array $attrs = []){
        $this->product->Add('<input ');
        $this->setAttrs($attrs);
        return $this;
        
    }


    public   function addTA(array $attrs = []){
        $this->product ->Add('<textarea ');
        $this->setAttrs($attrs,'textarea');
        return $this;
    
    }

    public function addlabel(array $attrs){
        $this->product->Add('<label ');
        $this->setAttrs($attrs, 'label');
        return $this;
    }

    public  function endF(){
        $this->product->Add('</form>');
        return $this;
    }

    public function decore($value){
        $this->product->Add($value);
        return $this;
    }

    private function setAttrs($attrs, $type='input'){

        if ($type === 'input'){
            foreach ($attrs as $key=>$value){$this->product->Add("$key = '$value'");}
            $this->product->Add('>');
        }else{
          
            foreach ($attrs as $key=>$value){
                if($key === 'value'){continue;}
                $this->product->Add("$key = '$value'");
            }

            if (isset($attrs['value'])){ $this->product->Add('>'. $attrs['value']."</$type>"); }
            else{ $this->product->Add("></$type>"); }
          
        }
        

    }
    public  function get(){
        return $this->product->getProduct();
    }


}






