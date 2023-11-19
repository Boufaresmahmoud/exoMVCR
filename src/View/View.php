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

    public function prepareListPage($tab){
        $content = "<ul>";
        foreach ($tab as $animal) {
            $content = "<a href='https://dev-boufare231.users.info.unicaen.fr/exoMVCR/site.php?id=" . strtolower($animal->getName()) . "'>".$animal->getName()."</a><br>";
            $content .= "</ul>";
        echo $content;
    }
}
}
