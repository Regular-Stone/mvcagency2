<?php
    class HomeController{
        public function index(){
            require_once 'views/annonces/index.php';
        }

        public function about(){
            echo 'About';
        }
        
        public function contact($id ){
            echo 'Contact ' . $id;
        }
    }