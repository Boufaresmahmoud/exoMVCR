<?php

class View{
    private $title = "";
    private $content = "";
    public function render(){
    include('AnimalPage.php');
    }
    public function prepareTestPage($title , $content){
        $this->title = $title ;
        $this->content = $content ;
    }
    public function prepareAnimalPage($name , $species){
        echo $name ." est un animal de l'espèce  ". $species ;
    }
    public function homePage(){
        echo "home page";
    }

    public function prepareUnknownAnimalPage(){
        echo "erreur";
    }
}
