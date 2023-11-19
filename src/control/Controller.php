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

    public function showInformation($id) {
        $this->view->prepareAnimalPage("Médor", "chien");
    }




}
