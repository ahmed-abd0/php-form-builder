<?php

namespace Src;
require_once('Product.php');
require_once('FormBuilderInterface.php');

class FormBuilderClass implements IFormBuilder{
    private Product $product ;
    public function __construct()
    {
        $this->product = new Product;
    }

   
    public function form(array $attrs = []){
        $this->product->Add('<form ');
        $this->setAttrs($attrs);
        $this->endTag();
        return $this;
    }


    public function input(array $attrs = []){
        $this->product->Add('<input ');
        $this->setAttrs($attrs);
        $this->endTag();
        return $this;
        
    }


    public function textarea(array $attrs = []){
        $this->product ->Add('<textarea ');
        $this->setAttrs($attrs,'textarea');
        $this->endTag('textarea', $attrs['value'] ?? '');
        return $this;
    
    }

    public function select(array $attrs = [], array $options = []){
        $this->product->Add('<select ');
        $this->setAttrs($attrs,'select');
        $this->endTag();
        $this->setOptions($options, $attrs['value'] ?? '');
        $this->endTag('select');

        return $this;
    }

    public function label(array $attrs = []){
        $this->product->Add('<label ');
        $this->setAttrs($attrs, 'label');
        $this->endTag('label', $attrs['value'] ?? '');
        return $this;
    }

    public function html($value){
        $this->product->Add($value);
        return $this;
    }
       
    public function endForm(){
        $this->product->Add('</form>');
        return $this;
    }
    public  function get(){
        return $this->product->getProduct();
    }
    
 

    private function setAttrs($attrs, $type= null){

        if (!$type)
        {
            foreach ($attrs as $key=>$value)
            {
                if($key === 'single')
                    continue;
                $this->product->Add(" $key = '$value' "); 
            }
        }
        if($type)
        {
            foreach ($attrs as $key=>$value){       
                if($key === 'value')
                    continue;
                
                if($key === 'single')
                    continue;
                $this->product->Add(" $key = '$value' "); 
            }
        }

        if(array_key_exists('single', $attrs)){
            foreach($attrs['single'] as $attr){
                $this->product->Add($attr);
            }
        }



    }

    private function setOptions(array $options ,string $value)
    {
        $selected = '';
        foreach ($options as $key=>$option){
            if($key == $value)
                $selected = 'selected';
            $this->product->Add("<option $selected value = '$key' >$option</option>");
            $selected = '';
        }
    }

    private function endTag($type = null, $value = ''){

        if(!$type)
            $this->product->Add('>');
        
        if($type == 'select')
            $this->product->Add('</select>');

        if($type != 'select' && $type)
            $this->product->Add(">$value</$type>");
      
    }
}



