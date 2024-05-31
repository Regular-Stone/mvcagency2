<?php
class AnnonceController {
        
    public function index(): void {
        $pageTitle = "Annonces";
        ob_start();
        require_once 'views/annonces/index.php';
        $content = ob_get_clean();
        require_once 'views/includes/template.php';
    }

    public function addAnnonce(): void {
        $pageTitle = "Ajouter une annonce";
        ob_start();
        require_once 'views/annonces/addAnnonce.php';
        $content = ob_get_clean();
        require_once 'views/includes/template.php';
    }

    public function registerAnnonce(): void {
        $this->controlAnnonceFormat();
    }

    public function showAnnonce(): void {
        $pageTitle = "Annonces enregistrées";
        ob_start();
        require_once 'views/annonces/showAnnonce.php';
        $content = ob_get_clean();
        require_once 'views/includes/template.php';
    }

    private function controlAnnonceFormat() {
        require_once 'utils/cleaner.php';

        $title = cleaner($_POST['title']);
        $description = cleaner($_POST['description']);
        $price = cleaner($_POST['price']);
        $category = cleaner($_POST['category']);


    }


    private function checkIfAnnonceAlreadyExist() {
        require_once 'core/config/databaseConfig.php';
        $db = Database::getInstance($host, $dbname, $user, $password);

    }

    
}