<?php

    namespace Controllers;

    class SobreController extends Controller{

        function __construct()
        {
            $this->view = new \Views\MainView('sobre');
        }
        
        public function executar(){
            $this->view->render(array('titulo' => 'Sobre'));
        }
    }


?>