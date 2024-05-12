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
        "movimiento" => "Cualquier número de casillas en cualquier dirección. Ver <a href='https://upload.wikimedia.org/wikipedia/commons/5/55/Queen_%28chess%29_movements.gif' target='_blank'>animación de movimiento</a>.",
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
    <table class="infobox" style="text-align: center">
        <tbody>
            <tr>
                <th colspan="3" style="background:#ffce9e;"><a class="mw-selflink selflink">Piezas de ajedrez</a>
                </th>
            </tr>
            <tr>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_klt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chess_klt45.svg/40px-Chess_klt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chess_klt45.svg/60px-Chess_klt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chess_klt45.svg/80px-Chess_klt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td>
            <td style="vertical-align: middle"><a href="/wiki/Rey_(ajedrez)" title="Rey (ajedrez)">Rey</a> (R)
            </td>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_kdt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Chess_kdt45.svg/40px-Chess_kdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Chess_kdt45.svg/60px-Chess_kdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Chess_kdt45.svg/80px-Chess_kdt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td>
            </tr>
            <tr>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_qlt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/Chess_qlt45.svg/40px-Chess_qlt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/Chess_qlt45.svg/60px-Chess_qlt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/15/Chess_qlt45.svg/80px-Chess_qlt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td>
            <td style="vertical-align: middle"><a href="/wiki/Dama_(ajedrez)" title="Dama (ajedrez)">Dama</a> o Reina (D)
            </td>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_qdt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/Chess_qdt45.svg/40px-Chess_qdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/Chess_qdt45.svg/60px-Chess_qdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/47/Chess_qdt45.svg/80px-Chess_qdt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td></tr>
            <tr>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_rlt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Chess_rlt45.svg/40px-Chess_rlt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Chess_rlt45.svg/60px-Chess_rlt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/72/Chess_rlt45.svg/80px-Chess_rlt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td>
            <td style="vertical-align: middle"><a href="/wiki/Torre_(ajedrez)" title="Torre (ajedrez)">Torre</a> (T)
            </td>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_rdt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Chess_rdt45.svg/40px-Chess_rdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Chess_rdt45.svg/60px-Chess_rdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Chess_rdt45.svg/80px-Chess_rdt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td></tr>
            <tr>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_blt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Chess_blt45.svg/40px-Chess_blt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Chess_blt45.svg/60px-Chess_blt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Chess_blt45.svg/80px-Chess_blt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td>
            <td style="vertical-align: middle"><a href="/wiki/Alfil" title="Alfil">Alfil</a> (A)
            </td>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_bdt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Chess_bdt45.svg/40px-Chess_bdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Chess_bdt45.svg/60px-Chess_bdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/98/Chess_bdt45.svg/80px-Chess_bdt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td></tr>
            <tr>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_nlt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Chess_nlt45.svg/40px-Chess_nlt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Chess_nlt45.svg/60px-Chess_nlt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/70/Chess_nlt45.svg/80px-Chess_nlt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td>
            <td style="vertical-align: middle"><a href="/wiki/Caballo_(ajedrez)" title="Caballo (ajedrez)">Caballo</a> (C)
            </td>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_ndt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Chess_ndt45.svg/40px-Chess_ndt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Chess_ndt45.svg/60px-Chess_ndt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Chess_ndt45.svg/80px-Chess_ndt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td></tr>
            <tr>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_plt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Chess_plt45.svg/40px-Chess_plt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Chess_plt45.svg/60px-Chess_plt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/45/Chess_plt45.svg/80px-Chess_plt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td>
            <td style="vertical-align: middle"><a href="/wiki/Pe%C3%B3n_(ajedrez)" title="Peón (ajedrez)">Peón</a>
            </td>
            <td><span typeof="mw:File"><a href="/wiki/Archivo:Chess_pdt45.svg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Chess_pdt45.svg/40px-Chess_pdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Chess_pdt45.svg/60px-Chess_pdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Chess_pdt45.svg/80px-Chess_pdt45.svg.png 2x" data-file-width="45" data-file-height="45"></a></span>
            </td></tr>
        </tbody>
    </table>
</body>
</html>
