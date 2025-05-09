<?php

namespace models;

use config\Database;
use PDO;

class Animal {
    public int $id;
    public string $type;
    public string $nom;
    public int $age;
    public string $race;
    public string $couleur;
    public bool $peut_parler;

    public function __construct(array $data) {
        $this->id = (int)$data['id'];
        $this->type = $data['type'];
        $this->nom = $data['nom'];
        $this->age = (int)$data['age'];
        $this->race = $data['race'];
        $this->couleur = $data['couleur'];
        $this->peut_parler = (bool)$data['peut_parler'];
    }

    public static function all(): array {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT * FROM animaux");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return array_map(fn($row) => new Animal($row), $rows);
    }
}
