<?php
// Créez une classe AnimalStorageStub implémentant l'interface AnimalStorage
class AnimalStorageStub implements AnimalStorage
{
    private $animals;

    public function __construct()
    {
        // Reprendre le tableau $animalsTab du contrôleur
        $this->animals = array(
            'medor' => new Animal('Médor', 'chien', 3),
            'felix' => new Animal('Félix', 'chat', 2),
            'denver' => new Animal('Denver', 'dinosaure', 65),
        );
    }

    public function read($id)
    {
        return isset($this->animals[$id]) ? $this->animals[$id] : null;
    }

    public function readAll()
    {
        return $this->animals;
    }
}
