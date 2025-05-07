<?php

class Animal {
    public $nom;
    public $age;
    public $nombre_de_pattes;

    public function __construct($nom, $age, $nombre_de_pattes) {
        $this->nom = $nom;
        $this->age = $age;
        $this->nombre_de_pattes = $nombre_de_pattes;
    }

    public function sePresenter() {
        echo "Je m'appelle {$this->nom} et j'ai {$this->age} ans.<br>";
    }
}

class Chien extends Animal {
    public $couleur_pelage;

    public function __construct($nom, $age, $nombre_de_pattes, $couleur_pelage) {
        parent::__construct($nom, $age, $nombre_de_pattes);
        $this->couleur_pelage = $couleur_pelage;
    }

    public function aboyer() {
        echo "Ouaf Ouaf !<br>";
    }
}

class Perroquet {
    public $nom;
    public $age;
    public $nombre_de_pattes;
    public $couleur_plumes;

    public function __construct($nom, $age, $nombre_de_pattes, $couleur_plumes) {
        $this->nom = $nom;
        $this->age = $age;
        $this->nombre_de_pattes = $nombre_de_pattes;
        $this->couleur_plumes = $couleur_plumes;
    }

    public function sePresenter() {
        echo "Je suis le perroquet {$this->nom} et j'ai {$this->age} ans.<br>";
    }

    public function siffler() {
        echo "Fiuuu Fiuuu !<br>";
    }
}

$tobby = new Chien("Tobby", 3, 4, "noir");
$tobby->sePresenter();
$tobby->aboyer();

$coco = new Perroquet("Coco", 2, 2, "bleu");
$coco->sePresenter();
$coco->siffler();

?>
