<?php
function prompt($message) {
    echo $message;
    return trim(fgets(STDIN));
}

function playGame() {
    $secret = rand(0, 20);
    $attempts = 0;

    echo "Bienvenue dans le jeu du Plus ou Moins !\n";
    echo "J'ai choisi un nombre entre 0 et 20. À toi de deviner !\n\n";

    while (true) {
        $input = prompt("Ta proposition : ");

        if (!is_numeric($input)) {
            echo "Entrée invalide. Merci de saisir un **nombre**.\n";
            continue;
        }

        $guess = (int) $input;
        $attempts++;

        if ($guess < $secret) {
            echo "Trop petit.\n";
        } elseif ($guess > $secret) {
            echo "Trop grand.\n";
        } else {
            echo "\nBravo ! Tu as trouvé le nombre $secret en $attempts essai" . ($attempts > 1 ? "s" : "") . " !\n";
            break;
        }
    }
}

do {
    playGame();
    $again = strtolower(prompt("\nVeux-tu rejouer ? (o/n) : "));
} while ($again === 'o');

echo "Merci d'avoir joué.\n";
?>
