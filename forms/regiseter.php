<?php

namespace Forms;

use Src\Facade\FormBuilder;
use Src\FormComponent;
use Src\IFormBuilder;

class Register extends FormComponent{
    
    
    public function Form() : IFormBuilder{
        return FormBuilder::form(['method' => 'post' , 'action' => 'register.php'])
        ->label(['value' => 'User Name'])
        ->input(['type' => 'text','id'=>'username','name' => 'username', 'class' => 'form-control','placeholder' => 'User Name'])
        ->label(['value' => 'Password'])
        ->input(['type' => 'password' , 'name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password'])
        ->label(['value' => 'Confirm Password'])
        ->input(['type' => 'password' , 'name' => 'confirm-password' , 'class' => 'form-control', 'placeholder' => 'Confirm Password'])
        ->html('<br>')
        ->input(['type' => 'submit', 'value'=>'register', 'class' => 'btn btn-primary'])
        ->endForm();
    }
}