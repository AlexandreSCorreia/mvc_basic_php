<?php

    $autoload = function($class){
        if($class == 'Email'){
            include('phpmailer/PHPMailerAutoLoad.php');
        }
        include($class.'.php');
    };

    spl_autoload_register($autoload);

    $app = new Application();
    $app->executar();


?>