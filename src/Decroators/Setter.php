<?php
namespace Src\Decroators;

use Src\Form;
use Src\Product;


class Setter {

    public static function attrs(Form &$form,$attrs, $type= null){
        if (!$type)
        {
            foreach ($attrs as $key=>$value)
            {
                if($key === 'single')
                    continue;
                $form->Add(" $key = '$value' "); 
            }
        }
        if($type)
        {
            foreach ($attrs as $key=>$value){       
                if($key === 'value')
                    continue;
                
                if($key === 'single')
                    continue;
                $form->Add(" $key = '$value' "); 
            }
        }

        if(array_key_exists('single', $attrs)){
            foreach($attrs['single'] as $attr){
                $form->Add($attr);
            }
        }



    }

    public static function options(Form &$form,$options, $value)
    {
        $selected = '';
        foreach ($options as $key=>$option){
            if($key == $value)
                $selected = 'selected';
            $form->Add("<option $selected value = '$key' >$option</option>");
            $selected = '';
        }
    }

    public static function endTag(Form &$form,$type = null, $value = ''){

        if(!$type)
            $form->Add('>');
        
        if($type == 'select')
            $form->Add('</select>');

        if($type != 'select' && $type)
            $form->Add(">$value</$type>");
      
    }
}