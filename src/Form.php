<?php

namespace Src;

class Form{
    private array $form = [];

  
    public function Add(string $item){
        $this->form[] = $item;  
        return $this;
    }

    public function getForm(){
       return join($this->form);
    }


    public  function setAttrs($attrs, $type= null){
        if (!$type)
        {
            foreach ($attrs as $key=>$value)
            {
                if($key === 'single')
                    continue;
                $this->Add(" $key = '$value' "); 
            }
        }

        if($type)
        {
            foreach ($attrs as $key=>$value){       
                if($key === 'value')
                    continue;
                
                if($key === 'single')
                    continue;
                $this->Add(" $key = '$value' "); 
            }
        }

        if(array_key_exists('single', $attrs)){
            foreach($attrs['single'] as $attr){
                $this->Add($attr);
            }
        }


        return $this;

    }

    public function setSelectOptions($options, $value)
    {
        $selected = '';
        foreach ($options as $key=>$option){
            if($key == $value)
                $selected = 'selected';
            $this->Add("<option $selected value = '$key' >$option</option>");
            $selected = '';
        }

        return $this;
    }

    public function setEndTag($type = null, $value = ''){

        if(!$type)
            $this->Add('>');
        
        if($type == 'select')
            $this->Add('</select>');

        if($type != 'select' && $type)
            $this->Add(">$value</$type>");

        return $this;
    }

}
