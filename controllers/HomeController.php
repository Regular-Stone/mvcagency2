<?php
    class HomeController{
        public function index() : void{
            require_once 'views/index.php';
        }

        public function about(){
            echo 'About';
        }
        
        public function contact($id ){
            echo 'Contact ' . $id;
        }
    }