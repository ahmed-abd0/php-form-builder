<?php


require_once('forms/login.php');
require_once('forms/regiseter.php');
require_once('forms/testForm.php');
require_once('layout/header.html');

use builder\FormBuilder;
use login\Login;
use register\Register;
use test\testForm;

echo <<<eof
  <div class='container' style='text-align:center;width: 600px ;margin-top:100px ;'>
  <h3> login </h3>
eof;
  
    $form = Login::make(new FormBuilder);
    $test = testForm::make(new FormBuilder);
    echo $form;
    echo $test;
    echo '<hr><br>';
    echo '<h3>register</h3>';

    $formReg = Register::make(new FormBuilder);
    
    echo $formReg;   

echo '</div>';






require_once('layout/footer.html');


