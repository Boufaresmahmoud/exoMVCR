<?php

class Controller{
    private $view ;
    private $animalsTab= array(
        'medor' => array('Médor', 'chien'),
        'felix' => array('Félix', 'chat'),
        'denver' => array('Denver', 'dinosaure'),
    );
    public function __construct($view){
        $this->view = $view ;
    }

    public function showInformation($id)
    {

        // Check if the provided 'id' exists in the animals array
        if (array_key_exists($id, $this->animalsTab)) {
            $animalInfo = $this->animalsTab[$id];
            $this->view->prepareAnimalPage($animalInfo[0], $animalInfo[1]);
        } else {
            // Display an error page for unknown animals
            $this->view->prepareUnknownAnimalPage();
        }

        // Render the view
        $this->view->render();
    }





}
