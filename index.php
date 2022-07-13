<?php

// use login\Form as Logio;

require_once('login.php');
require_once('regiseter.php');
require_once('layout/header.html');

use builder\Form;
use login\Form as LoginForm;
use register\Form as RegisterForm;

echo <<<eof
  <div class='container' style='text-align:center;width: 600px ;margin-top:100px ;'>
  <h3> login </h3>
eof;
  
    echo LoginForm::login();

    echo '<hr><br>';
    echo '<h3>register</h3>';

    echo RegisterForm::register();

    echo '<hr><br>';

    echo '<h3> handmade </h3>';

    echo Form::form()->start()->addF(['class' => 'form-control'])
   ->decore('<br>')->addTA(['class' => 'form-control'])->endF()->get();


echo '</div>';






require_once('layout/footer.html');


