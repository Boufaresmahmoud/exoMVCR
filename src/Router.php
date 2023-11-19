<?php
include('View/View.php');
include('control/Controller.php');
include('model/AnimalStorage.php');
include('model/AnimalStorageStub.php');
class Router{

    private $controller;
    public function main (){
        $view = new View() ;
        $animalStorageStub = new AnimalStorageStub();
        $router = new Router($animalStorageStub);
        $this->controller = new Controller($view, $animalStorageStub);
        /* $controller = new Controller($view);
        if(key_exists('id',$_GET)){
            $controller->showInformation($_GET['id']);
        }
        else if (key_exists('liste',$_GET)){
            $controller->showList();
        }else{
            $view->homePage();*/
        }



    public function url($id){
        return "https://dev-boufare231.users.info.unicaen.fr/exoMVCR/site.php?id=".$id;
    }
}