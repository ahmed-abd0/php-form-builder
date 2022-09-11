<?php


require_once('forms/login.php');
require_once('forms/regiseter.php');
require_once('forms/testForm.php');
require_once('layout/header.html');

use Forms\Login;
use Forms\Register;
use Forms\testForm;
use src\FormBuilder;

echo <<<eof
  <div class='container' style='text-align:center;width: 600px ;margin-top:100px ;'>
eof;

echo '<h3>Login</h3>';

    $login = Login::create();
   
    echo $login;
  
    echo '<hr><br>';
    echo '<h3>register</h3>';

    $register = Register::create();

    echo $register;

    echo '<h3>Form</h3>';

    echo testForm::create();
    echo '<br> <h3>Model</h3>';

    $model = ['select' => 'key3' , 'text' => 'this textarea', 'check' => 'ahmed', 'radio' => 'ahmed'];

    echo testForm::create()->model($model, 'model.php');


echo '</div>';






require_once('layout/footer.html');


