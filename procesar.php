
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $edad = htmlspecialchars($_POST["edad"]);
    $grupo = htmlspecialchars($_POST["grupo"]);
    $separas = htmlspecialchars($_POST["separas"]);
    $acciones = htmlspecialchars($_POST["acciones"]);
    $compromiso = htmlspecialchars($_POST["compromiso"]);
    $propuesta = htmlspecialchars($_POST["propuesta"]);

    // Respuestas correctas
    $respuestas = [
        "pregunta1" => "Inorgánico",
        "pregunta2" => "Orgánico",
        "pregunta3" => "Electrónico",
        "pregunta4" => "Inorgánico",
        "pregunta5" => "Orgánico"
    ];

    $puntos = 0;

    echo "<h1>Resultados del registro</h1>";

    // Mostrar datos del usuario
    echo "<h2>Datos personales</h2>";
    echo "Nombre: $nombre <br>";
    echo "Edad: $edad <br>";
    echo "Grupo: $grupo <br>";
    echo "¿Separas tus residuos?: $separas <br>";
    echo "Acciones ambientales: $acciones <br>";
    echo "Compromiso: $compromiso <br>";
    echo "Comentario y propuesta: $propuesta <br>";

    // Evaluar respuestas
    echo "<h2>Resultados del juego</h2>";

    foreach ($respuestas as $pregunta => $correcta) {

        $usuario = $_POST[$pregunta] ?? "";

        echo "<p>";

        if ($usuario == $correcta) {

            echo "Respuesta correcta: $usuario";
            $puntos++;

        } else {

            echo "Respuesta incorrecta.";
            echo "<br>Tu respuesta: " .
                 htmlspecialchars($usuario);
            echo "<br>Respuesta correcta: $correcta";

        }

        echo "</p>";
    }

    // Mostrar calificación
    echo "<h2>Calificación final</h2>";

    echo "Obtuviste $puntos de 5 puntos.<br>";

    $calificacion = $puntos * 20;

    echo "Tu calificación es: $calificacion / 100";

    if ($puntos == 5) {
        echo "<h2>¡Excelente trabajo!</h2>";
    } elseif ($puntos >= 3) {
        echo "<h2>¡Buen trabajo! Sigue aprendiendo.</h2>";
    } else {
        echo "<h2>¡Sigue practicando!</h2>";
    }

} else {

    echo "No se recibieron datos del formulario.";

}

?>
