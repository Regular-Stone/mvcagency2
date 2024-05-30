<?php
    class AnnonceController {
        
        public function index() {
            $pageTitle = "Annonces";
            ob_start();
            require_once 'views/annonces/index.php';
            $content = ob_get_clean();
            require_once 'views/includes/template.php';
        }

        public function addAnnonce() {
            $pageTitle = "Ajouter une annonce";
            ob_start();
            require_once 'views/annonces/addAnnonce.php';
            $content = ob_get_clean();
            require_once 'views/includes/template.php';
        }

        public function registerAnnonce() {
            $pageTitle = "Et c'est gg wp !";
            ob_start();
            require_once 'views/annonces/registerAnnonce.php';
            $content = ob_get_clean();
            require_once 'views/includes/template.php';
        }

        public function showAnnonce() {
            $pageTitle = "Annonces enregistrées";
            ob_start();
            require_once 'views/annonces/showAnnonce.php';
            $content = ob_get_clean();
            require_once 'views/includes/template.php';
        }
    }