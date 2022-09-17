<?php

namespace Src;

use Src\Decroators\EndForm;
use Src\Decroators\FormStart;
use Src\Decroators\Html;
use Src\Decroators\Input;
use Src\Decroators\Label;
use Src\Decroators\Select;
use Src\Decroators\TextArea;


class FormBuilderClass implements IFormBuilder{
    private Form $form ;
    public function __construct()
    {
        $this->form = new Form;
    }

   
    public function form(array $attrs = []){
        $this->form = (new FormStart($this->form))->add($attrs);
        return $this;
    }


    public function input(array $attrs = []){
        $this->form = (new Input($this->form))->add($attrs);
        return $this;
        
    }


    public function textarea(array $attrs = []){
        $this->form = (new TextArea($this->form))->add($attrs);
        return $this;
    
    }

    public function select(array $attrs = [], array $options = []){
        $this->form = (new Select($this->form))->add($attrs, $options);
        return $this;
    }

    public function label(array $attrs = []){
        $this->form = (new Label($this->form))->add($attrs);
        return $this;
    }

   
    public function endForm(){
        $this->form = (new EndForm($this->form))->add();
        return $this;
    }

    public function html($html){
        $this->form = (new Html($this->form))->add($html);
        return $this;
    }
    

    public  function get(){
        return $this->form->getProduct();
    }
    
}



