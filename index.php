<?php


require_once('login.php');
require_once('regiseter.php');
require_once('layout/header.html');

use builder\Form;
use login\Login;
use register\Register;

echo <<<eof
  <div class='container' style='text-align:center;width: 600px ;margin-top:100px ;'>
  <h3> login </h3>
eof;
  
    echo Login::Form();

    echo '<hr><br>';
    echo '<h3>register</h3>';

    echo Register::Form();    
   

echo '</div>';






require_once('layout/footer.html');


