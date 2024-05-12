<?php
// Define an associative array with chess pieces as keys and their details as values.
$chessPieces = [
    "King" => [
        "nombre" => "Rey",
        "descripcion" => "El rey puede moverse en cualquier dirección, pero solo una casilla a la vez.",
        "valor" => "Infinito",
        "movimiento" => "Una casilla en cualquier dirección",
        "ejemplos" => "Movimiento del rey en situaciones de jaque."
    ],
    "Queen" => [
        "nombre" => "Reina",
        "descripcion" => "La dama (♕♛) es una pieza mayor del juego de ajedrez; se puede mover vertical, " .
            "horizontal o diagonalmente cualquier número de escaques. Representada en los países de habla " .
            "hispana y portuguesa por la letra D en la notación algebraica. Es la pieza de mayor valor absoluto " .
            "del juego, valorada con nueve puntos. En el chaturanga y shatranj, antecesores más antiguos de " .
            "ajedrez, el lugar de la dama era ocupado por la firzan o firz, equivalente al visir o consejero real. " .
            "En Europa, durante la Edad Media, la dama sustituyó poco a poco su antecesor, a pesar de que los " .
            "movimientos sean los mismos, y ya en el final del siglo XIII estuvo presente en todo el continente. " .
            "A finales del siglo XV, su movimiento se expandió alcanzando vigente hasta el siglo XXI, aunque " .
            "todavía se restringían las condiciones de promoción de un peón a una nueva dama. Normalmente no se " .
            "utiliza en la fase de apertura del juego, por estar sujeta a ataques de las piezas menores en " .
            "posiciones cerradas, aunque haya aperturas clasificadas en The Encyclopaedia of Chess Openings " .
            "(Enciclopedia de aperturas de ajedrez) con su prematura utilización. En las fases de medio juego y " .
            "final, se vuelve extremadamente útil, ya que se utiliza con facilidad en tácticas como el tenedor " .
            "y el pincho. La dama se mueve en línea recta por las filas, columnas y diagonales en el tablero. " .
            "No puede saltar a sus propias piezas o las adversarias y captura tomando el escaque ocupado por el " .
            "escaque adversario. Debido a su valor, generalmente se cambia solo por la dama adversaria y su " .
            "sacrificio, en función de otras piezas, son posiciones que normalmente determinan el resultado de la partida.",
        "valor" => "9",
        "movimiento" => "Cualquier número de casillas en cualquier dirección",
        "ejemplos" => "Estrategias clave en el medio juego y final."
    ],
    // Add other pieces similarly...
];

// Check if the 'piece' URL parameter is set and exists in our array
if (isset($_GET['piece']) && array_key_exists($_GET['piece'], $chessPieces)) {
    $piece = $chessPieces[$_GET['piece']];
} else {
    // Default message if the piece is not found or not specified
    $piece = [
        "nombre" => "Pieza no especificada",
        "descripcion" => "Por favor, especifica una pieza de ajedrez válida en la URL.",
        "valor" => "",
        "movimiento" => "",
        "ejemplos" => ""
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SIPA - Sistema Identificador de Piezas de Ajedrez</title>
</head>
<body>
    <h1>Bienvenido al SIPA</h1>
    <h2>Pieza: <?= $piece['nombre'] ?></h2>
    <p><strong>Descripción:</strong> <?= $piece['descripcion'] ?></p>
    <p><strong>Valor:</strong> <?= $piece['valor'] ?></p>
    <p><strong>Movimiento:</strong> <?= $piece['movimiento'] ?></p>
    <p><strong>Estrategias para principiantes:</strong> <?= $piece['ejemplos'] ?></p>
</body>
</html>
