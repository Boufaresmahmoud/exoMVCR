<?php

include('model/Animal.php');

class Controller{
    private $view ;
    private $animalsTab;
    private $animalStorage;
    public function __construct($view, $animalStorage){
        $this->view = $view ;
        $this->animalsTab = array(
            'medor' => new Animal('Médor', 'chien', 5),
            'felix' => new Animal('Felix', 'chat', 3),
            'denver' => new Animal ('Denver', 'dinosaure', 65)

        );

        $this->animalStorage = $animalStorage;
    }

    public function showInformation($id)
    {

        // Check if the provided 'id' exists in the animals array
        if (array_key_exists($id, $this->animalsTab)) {
            $animalInfo = $this->animalsTab[$id];
            $this->view->prepareAnimalPage($animalInfo);
        } else {
            // Display an error page for unknown animals
            $this->view->prepareUnknownAnimalPage();
        }

        // Render the view
        $this->view->render();
    }

    public function showList(){
        $this->view->prepareListPage($this->animalsTab);
    }





}
