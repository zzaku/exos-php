<?php

namespace controllers;

use models\Animal;

class AnimalController {
    public function index() {
        $animaux = Animal::all();
        require_once __DIR__ . '/../views/animal/index.php';
    }
}
