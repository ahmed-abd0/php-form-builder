<?php
namespace Forms;

use Src\Facade\FormBuilder;
use Src\FormComponent;
use Src\IFormBuilder;


class Login extends FormComponent {
   
    public function Form() : IFormBuilder {
        return  FormBuilder::form(['method' => 'post' , 'action' => 'login.php'])
                ->label(['value' => 'User Name'])
                ->input(['type' => 'text','id'=>'username','name' => 'username', 'class' => 'form-control','placeholder' => 'User Name'])
                ->label(['value' => 'Password'])                
                ->input(['type' => 'password' , 'name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password'])
                ->html('<br>')
                ->input(['type' => 'submit', 'value'=>'login', 'class' => 'btn btn-primary'])
                ->endForm();
    }

   
}