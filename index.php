<?php
// Define an associative array with chess pieces as keys and their details as values.
$chessPieces = [
    "King" => [
        "nombre" => "Rey",
        "descripcion" => "El rey puede moverse en cualquier dirección, pero solo una casilla a la vez.",
        "valor" => "Infinito, pues sin él el juego termina.",
        "movimiento" => "Una casilla en cualquier dirección. <br /><img src='./img/moves_King.gif'>",
        "ejemplos" => "Movimiento del rey en situaciones de jaque.<br /><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/y97bULMvfXQ?si=a5gIooZ2BwGl1QQI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>"
    ],
    "Queen" => [
        "nombre" => "Reina",
        "descripcion" => "La dama (♕♛) es una pieza mayor del juego de ajedrez; se puede mover vertical, " .
            "horizontal o diagonalmente cualquier número de escaques. Representada en los países de habla " .
            "hispana y portuguesa por la letra D en la notación algebraica. Es la pieza de mayor valor absoluto " .
            "del juego, valorada con nueve puntos.",
        "valor" => "9",
        "movimiento" => "Cualquier número de casillas en cualquier dirección. <br /><img src='img/moves_Queen.gif'>",
        "ejemplos" => "Estrategias clave en el medio juego y final.<br /><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/IJxT5I2QadI?si=Yi9f-lTt_mx0Q7zv\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>"
    ],
    "Rook" => [
        "nombre" => "Torre",
        "descripcion" => "La torre (♖♜) es una pieza mayor del juego de ajedrez; se puede mover horizontal o " .
            "verticalmente cualquier número de escaques. Representada en los países de habla hispana y portuguesa " .
            "por la letra T en la notación algebraica. Su valor es de cinco puntos.",
        "valor" => "5",
        "movimiento" => "Cualquier número de casillas en horizontal o vertical. <br /><img src='img/moves_Rook.gif'>",
        "ejemplos" => "Estrategias clave en el medio juego y final.<br /><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mqY2Oo1K8nk?si=wiiCEmoRdh3VaCqO\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>"
    ],
    "Bishop" => [
        "nombre" => "Alfil",
        "descripcion" => "El alfil (♗♝) es una pieza menor del juego de ajedrez; se puede mover en diagonal " .
            "cualquier número de escaques. Representada en los países de habla hispana y portuguesa por la letra A " .
            "en la notación algebraica. Su valor es de tres puntos.",
        "valor" => "3",
        "movimiento" => "Cualquier número de casillas en diagonal. <br /><img src='img/moves_Bishop.gif'>",
        "ejemplos" => "Estrategias clave en el medio juego y final.<br /><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EQPIpaQPwwc?si=05XZIHuUtTW6R0kH\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>"
    ],
    "Knight" => [
        "nombre" => "Caballo",
        "descripcion" => "El caballo (♘♞) es una pieza menor del juego de ajedrez; se puede mover en forma de " .
            "L, dos escaques en una dirección y uno en la otra. Representada en los países de habla hispana y " .
            "portuguesa por la letra C en la notación algebraica. Su valor es de tres puntos.",
        "valor" => "3",
        "movimiento" => "Forma de L, dos casillas en una dirección y una en la otra. <br /><img src='img/moves_Knight.gif'>",
        "ejemplos" => "Estrategias clave en el medio juego y final.<br /><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MVYgN1tf8yY?si=uBkO3noDwCa9ASh8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>"
    ],
    "Pawn" => [
        "nombre" => "Peón",
        "descripcion" => "El peón (♙♟) es una pieza menor del juego de ajedrez; se puede mover hacia adelante " .
            "una casilla, pero captura en diagonal. Representada en los países de habla hispana y portuguesa por " .
            "la letra P en la notación algebraica. Su valor es de un punto.",
        "valor" => "1",
        "movimiento" => "Una casilla hacia adelante, pero captura en diagonal. <br /><img src='img/moves_Pawn.gif'>",
        "ejemplos" => "Estrategias clave en el medio juego y final.<br /><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/E_aQXe22ozY?si=PcQJ7L0MRbiW4q4w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>"
    ]
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
    <table class="infobox" style="text-align: center">
        <tbody>
            <tr>
                <th colspan="3" style="background:#ffce9e;">Piezas de ajedrez y sus símbolos</th>
                </th>
            </tr>
            <tr>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chess_klt45.svg/40px-Chess_klt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chess_klt45.svg/60px-Chess_klt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chess_klt45.svg/80px-Chess_klt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
                <td style="vertical-align: middle">
                    <a href="index.php?piece=King" title="Rey (ajedrez)">Rey</a> (R)
                </td>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Chess_kdt45.svg/40px-Chess_kdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Chess_kdt45.svg/60px-Chess_kdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Chess_kdt45.svg/80px-Chess_kdt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/Chess_qlt45.svg/40px-Chess_qlt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/Chess_qlt45.svg/60px-Chess_qlt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/15/Chess_qlt45.svg/80px-Chess_qlt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
                <td style="vertical-align: middle">
                    <a href="index.php?piece=Queen" title="Dama (ajedrez)">Dama</a> o Reina (D)
                </td>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/Chess_qdt45.svg/40px-Chess_qdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/Chess_qdt45.svg/60px-Chess_qdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/47/Chess_qdt45.svg/80px-Chess_qdt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Chess_rlt45.svg/40px-Chess_rlt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Chess_rlt45.svg/60px-Chess_rlt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/72/Chess_rlt45.svg/80px-Chess_rlt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
                <td style="vertical-align: middle">
                    <a href="index.php?piece=Rook" title="Torre (ajedrez)">Torre</a> (T)
                </td>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Chess_rdt45.svg/40px-Chess_rdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Chess_rdt45.svg/60px-Chess_rdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Chess_rdt45.svg/80px-Chess_rdt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Chess_blt45.svg/40px-Chess_blt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Chess_blt45.svg/60px-Chess_blt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Chess_blt45.svg/80px-Chess_blt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
                <td style="vertical-align: middle">
                    <a href="index.php?piece=Bishop" title="Alfil">Alfil</a> (A)
                </td>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Chess_bdt45.svg/40px-Chess_bdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Chess_bdt45.svg/60px-Chess_bdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/98/Chess_bdt45.svg/80px-Chess_bdt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Chess_nlt45.svg/40px-Chess_nlt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Chess_nlt45.svg/60px-Chess_nlt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/70/Chess_nlt45.svg/80px-Chess_nlt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
                <td style="vertical-align: middle">
                    <a href="index.php?piece=Knight" title="Caballo (ajedrez)">Caballo</a> (C)
                </td>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Chess_ndt45.svg/40px-Chess_ndt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Chess_ndt45.svg/60px-Chess_ndt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Chess_ndt45.svg/80px-Chess_ndt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Chess_plt45.svg/40px-Chess_plt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Chess_plt45.svg/60px-Chess_plt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/45/Chess_plt45.svg/80px-Chess_plt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
                <td style="vertical-align: middle">
                    <a href="index.php?piece=Pawn" title="Peón (ajedrez)">Peón</a>
                </td>
                <td>
                    <span typeof="mw:File">
                        <img src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Chess_pdt45.svg/40px-Chess_pdt45.svg.png" decoding="async" width="40" height="40" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Chess_pdt45.svg/60px-Chess_pdt45.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Chess_pdt45.svg/80px-Chess_pdt45.svg.png 2x" data-file-width="45" data-file-height="45">
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    <h2>Pieza: <?= $piece['nombre'] ?></h2>
    <p><strong>Descripción:</strong> <?= $piece['descripcion'] ?></p>
    <p><strong>Valor:</strong> <?= $piece['valor'] ?></p>
    <p><strong>Movimiento:</strong> <?= $piece['movimiento'] ?></p>
    <p><strong>Estrategias para principiantes:</strong> <?= $piece['ejemplos'] ?></p>

</body>
</html>
