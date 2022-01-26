<?php

    namespace Views;
    
    class MainView{
        
        private $fileName;
        private $header;
        private $footer;

        const titulo = 'Projeto MVC';
        public $menuItems = array('Home','Sobre','Contato');

        public function __construct($fileName, $header = 'header', $footer = 'footer')
        {
            $this->fileName = $fileName;
            $this->header = $header;
            $this->footer = $footer;
        }

        public function render($arr = []){
            include('pages/template/'.$this->header.'.php');
            include('pages/'.$this->fileName.'.php');
            include('pages/template/'.$this->footer.'.php');
        }
    }


?>