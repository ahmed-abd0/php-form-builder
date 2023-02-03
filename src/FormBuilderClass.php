<?php

namespace Src;

class FormBuilderClass implements IFormBuilder{
    private Form $form ;
    public function __construct()
    {
        $this->form = new Form;
    }

   
    public function form(array $attrs = []){
        $this->form->Add('<form ')->setAttrs($attrs)->setEndTag();
        return $this;
    }


    public function input(array $attrs = []){
        $this->form->Add('<input ')->setAttrs($attrs)->setEndTag();
        return $this;
    }


    public function textarea(array $attrs = []){
        $this->form->Add("<textarea ")->setAttrs($attrs, "textarea")->setEndTag("textarea", $attrs["value"] ?? "");
        return $this;
    
    }

    public function select(array $attrs = [], array $options = []){
        $this->form->Add('<select ')
                   ->setAttrs($attrs, "select")
                   ->setEndTag()
                   ->setSelectOptions($options, $attrs['value'] ?? '')
                   ->setEndTag();
        return $this;
    }

    public function label(array $attrs = []){
        $this->form->Add('<label ')->setAttrs($attrs, "label")->setEndTag("label", $attrs["value"]);
        return $this;
    }

   
    public function endForm(){
        $this->form->Add('</form>');
        return $this;
    }

    public function html($html){
        $this->form->Add($html);
        return $this;
    }
    

    public  function get(){
        return $this->form->getForm();
    }
    
}



