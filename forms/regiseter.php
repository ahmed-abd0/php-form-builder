<?php

namespace register;
require_once ('src/builder.php');
require_once('src/BuilderDirectory.php');
use BuilderDir\FormBuilderDir;

class Register extends FormBuilderDir{
    
    
    public  function Form($action='register.php') :string{
        return $this->formBuilder->addFirst(['method' => 'post' , 'action' => $action])
        ->addF(['type' => 'text','id'=>'username','name' => 'username', 'class' => 'form-control','placeholder' => 'User Name'])
        ->decore('<br>')
        ->addF(['type' => 'password' , 'name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password'])
        ->decore('<br>')
        ->addF(['type' => 'password' , 'name' => 'confirm-password' , 'class' => 'form-control', 'placeholder' => 'Confirm Password'])
        ->decore('<br>')
        ->addF(['type' => 'submit', 'value'=>'register', 'class' => 'btn btn-primary'])
        ->get();
    }
}