<?php
    class HomeController{
        public function index(){
            echo 'Home';
        }

        public function about(){
            echo 'About';
        }
        
        public function contact($id ){
            echo 'Contact ' . $id;
        }
    }