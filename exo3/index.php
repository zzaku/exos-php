<?php

require_once 'autoloader.php';

use controllers\AnimalController;

$controller = new AnimalController();
$controller->index();
