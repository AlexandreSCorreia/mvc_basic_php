<?php

    namespace Models;

    class ContatoModel{


        public static function enviarFormulario(){
            $mail = new \Email('','','','MVC Basic');
            $mail->addAdress('','Bot');
            $mail->formatarEmail(array('assunto'=> 'Mensagem do site', 'corpo' => 'Aqui é uma mensagem do site'));
            $mail->enviarEmail();
        
        
        }
    }



?>