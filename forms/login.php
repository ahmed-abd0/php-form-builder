<?php
namespace Forms;

use Src\FormBuilder;
use Src\FormComponent;

require_once ('src/Facade.php');
require_once('src/FormComponent.php');

class Login extends FormComponent {
   
    public function Form(){
        return  FormBuilder::form(['method' => 'post' , 'action' => 'login.php'])
                ->input(['type' => 'text','id'=>'username','name' => 'username', 'class' => 'form-control','placeholder' => 'User Name'])
                ->html('<br>')
                ->input(['type' => 'password' , 'name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password'])
                ->html('<br>')
                ->input(['type' => 'submit', 'value'=>'login', 'class' => 'btn btn-primary'])
                ->endForm();
    }

   
}