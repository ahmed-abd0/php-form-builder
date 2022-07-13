<?php

namespace builder;

interface FormBuilder{

    
    public static function form();
    public function start(array $attrs);
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
   
   
    public static function form(){

        if(self::$instance  == null){
            self::$instance   = new Form();
        }
        return self::$instance;
    }

    
    public function start(array $attrs = []){
        $this->product = new Product();
        $this->product->Add('<form ');

        if(!empty($attrs))
        {
            foreach ($attrs as $key=>$value)
            {
                $this->product->Add("$key = '$value'");
            }

        }

        $this->product->Add('>');

        return $this;
    }


    public   function addF(array $attrs = []){
        $this->product->Add('<input ');

        if(!empty($attrs))
        {
            foreach ($attrs as $key=>$value)
            {
                $this->product->Add("$key = '$value'");
            }

        }

        $this->product->Add('>');

        return $this;
        
    }


    public   function addTA(array $attrs = []){
        $this->product ->Add('<textarea ');

        if(!empty($attrs))
        {
            foreach ($attrs as $key=>$value)
            {
                if($key != 'value'){
                $this->product->Add("$key = '$value'");
                }
            }

        }

        if (isset($attrs['value'])){ $this->product->Add('>'. $attrs['value'].'</textarea>'); }
        else{$this->product->Add('></textarea>'); }

        return $this;
    
    }

    public function addlabel(array $attrs){
        $this->product->Add('<label ');

        if(!empty($attrs))
        {
            foreach ($attrs as $key=>$value)
            {
                $this->product->Add("$key = '$value'");
            }

        }

        if (isset($attrs['value'])){ $this->product->Add('>'. $attrs['value'].'</label>'); }
        else{$this->product->Add('></label>'); }

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


    public  function get(){
        return $this->product->getProduct();
    }
    
}






