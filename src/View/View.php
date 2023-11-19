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
        echo $name .' ceci est un '. $species ;
    }

    public function prepareUnknownAnimalPage(){
        echo "erreur";
    }
}
