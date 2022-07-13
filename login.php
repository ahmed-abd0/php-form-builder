<?php
namespace login;

require_once('builder.php');
use builder\Form as parentForm;

class Form extends parentForm{
    public static function login($action='login.php'){

        return self::form()->start(['method' => 'post' , 'action' => $action])
        ->addF(['type' => 'text','id'=>'username','name' => 'username', 'class' => 'form-control','placeholder' => 'User Name'])
        ->decore('<br>')
        ->addF(['type' => 'password' , 'name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password'])
        ->decore('<br>')
        ->addF(['type' => 'button', 'value'=>'login', 'class' => 'btn btn-primary'])->endF()->get();
    }
}