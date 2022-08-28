<?php

namespace builder;


interface IFormBuilder{

    public function addFirst(array $attrs);
    public  function addF(array $attrs);
    public  function addTA(array $attrs);
    public function addlabel(array $attrs);
    public function decore(string $value);
    public  function get();

}

class Product{
    private array $List = [];

    public function Add(String $item){
        $this->List[] = $item;        
    }

    public function getProduct(){
        return join($this->List);    
    }

}


class FormBuilder implements IFormBuilder{
    private Product $product ;
    public function __construct()
    {
        $this->product = new Product;
    }

    public function addFirst(array $attrs = []){
        $this->product->Add('<form ');
        $this->setAttrs($attrs);
        $this->endTag();
        return $this;
    }


    public function addF(array $attrs = []){
        $this->product->Add('<input ');
        $this->setAttrs($attrs);
        $this->endTag();
        return $this;
        
    }


    public function addTA(array $attrs = []){
        $this->product ->Add('<textarea ');
        $this->setAttrs($attrs,'textarea');
        $this->endTag('textarea', $attrs['value'] ?? '');
        return $this;
    
    }

    public function addlabel(array $attrs = []){
        $this->product->Add('<label ');
        $this->setAttrs($attrs, 'label');
        $this->endTag('label', $attrs['value'] ?? '');
        return $this;
    }

    public function decore($value){
        $this->product->Add($value);
        return $this;
    }
       
    public  function get(){
        $this->product->Add('</form>');
        return $this->product->getProduct();
    }
    

    private function setAttrs($attrs, $type='input'){

        if ($type === 'input')
        {
            foreach ($attrs as $key=>$value)
            {
                if($key === 'single')
                    continue;
                    $this->product->Add("$key = '$value'");   
            }
        }
        else
        {
          
            foreach ($attrs as $key=>$value){
                
                if($key === 'value')
                    continue;
                
                if($key === 'single')
                    continue;
                
                    $this->product->Add("$key = '$value'"); 
            }

        
        }

        if(array_key_exists('single', $attrs)){
            foreach($attrs['single'] as $attr){
                $this->product->Add($attr);
            }
        }



    }

    private function endTag($type = null, $value=''){

        if(!$type)
            $this->product->Add('>');
        
        if($type)
            $this->product->Add(">$value</$type>");
      
    }
}


