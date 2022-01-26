<?php
    define('INCLUDE_PATH', 'http://localhost/mvc_basic_php/');
    define('INCLUDE_PATH_FULL', 'http://localhost/mvc_basic_php/Views/pages/');

    class Application{

       public function executar(){
           $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
           $url = ucfirst($url);
           $url .= "Controller";

           if(file_exists('Controllers/'.$url.'.php')){
                $className = 'Controllers\\'.$url;
                $controller = new $className;
                $controller->executar();
           }else{
               die("Não existe este controlador!");
           }
       }
    }


?>