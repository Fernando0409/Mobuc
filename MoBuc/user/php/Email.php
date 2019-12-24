<?php
    class Email{

        // Propiedades que tiene un email
        public $email, $subject, $body, $header;
        
        // Metodo constructor de la clase
        public function __construct(){
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setSubject($subject){
            $this->subject = $subject;
        }
        
        public function setBody($body){
            $this->body = $body;
        }

        public function sendEmail(){
            $this->header = "From: fernando04.software@gmail.com "."\r\n" .
                            "MIME-Version: 1.0"."\r\n".
                            "Content-Type: text/html; charset = utf-8";

            $result = mail($this->email, $this->subject, $this->body, $this->header);
            var_dump($result);
        }

    }