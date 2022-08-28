<?php
namespace login;

require_once('src/builder.php');
require_once('src/BuilderDirectory.php');
use builder\FormBuilder;
use BuilderDir\FormBuilderDir;

class Login extends FormBuilderDir {
   
    public function Form($action='login.php') : string{
        return  $this->formBuilder->addFirst(['method' => 'post' , 'action' => $action])
        ->addF(['type' => 'text','id'=>'username','name' => 'username', 'class' => 'form-control','placeholder' => 'User Name'])
        ->decore('<br>')
        ->addF(['type' => 'password' , 'name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password'])
        ->decore('<br>')
        ->addF(['type' => 'submit', 'value'=>'login', 'class' => 'btn btn-primary'])->get();
    }

   
}