<?php
include('View/View.php');
include('control/Controller.php');
class Router{
    public function main (){
        $view = new View() ;
        $controller = new Controller($view);
        $controller->showInformation("medor");


    }
}