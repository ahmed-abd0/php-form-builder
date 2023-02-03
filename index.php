<?php

require_once realpath("vendor/autoload.php");


require_once('forms/login.php');
require_once('forms/regiseter.php');
require_once('forms/testForm.php');
require_once('layout/header.html');


use Forms\Login;
use Forms\Register;
use Forms\testForm;

echo <<<eof
  <div class='container' style =' width:700px ;margin-top:100px ;'>
eof;

echo '<h3>Login</h3>';

    $loginModel = ['username' => 'ahmed', 'password' => '123123'];
    
    echo Login::create();

    echo Login::create()->model($loginModel);
  
    echo '<hr><br>';
    echo '<h3>register</h3>';

    $registerModel = ['username'=>'ahmed', 'password' => '123123', 'confirm-password' => '123123'];

    echo Register::create();

    echo Register::create()->model($registerModel);

    echo '<h3>Form</h3>';

    echo testForm::create();
   
    echo '<hr> <br> <h3>Model</h3>';

    $model = ['select' => 'key3' , 'text' => 'this textarea', 'check' => ['ahmed','abdo'], 'radio' => 'ahmed', "name" => "hussin"];

    echo testForm::create()->model($model, 'model.php');


echo '</div>';






require_once('layout/footer.html');


