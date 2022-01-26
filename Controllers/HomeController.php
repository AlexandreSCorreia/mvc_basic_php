<?php

    namespace Controllers;
    
    class HomeController{
        
        function __construct()
        {
            $this->view = new \Views\MainView('home');
        }

        public function executar(){
            $this->view->render(array('titulo' => 'Home'));
        }
    }


?>