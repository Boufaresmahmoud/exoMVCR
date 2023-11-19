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
    public function prepareAnimalPage($animal){
        echo $animal->getName() ." est un animal de l'espèce  ". $animal->getSpecies() ." et a ". $animal->getAge() ." ans.";
    }
    public function homePage(){
        echo "home page";
    }

    public function prepareUnknownAnimalPage(){
        echo "erreur";
    }
}
