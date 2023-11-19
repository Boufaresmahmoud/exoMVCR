<?php
include('View/View.php');
include('control/Controller.php');
class Router{
    public function main (){
        $view = new View() ;
        $controller = new Controller($view);
        if(key_exists('id',$_GET)){
            $controller->showInformation($_GET['id']);
        }
        else if (key_exists('liste',$_GET)){
            $controller->showList();
        }else{
            $view->homePage();
        }


    }

    public function url($id){
        return "https://dev-boufare231.users.info.unicaen.fr/exoMVCR/site.php?id=".$id;
    }
}