
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="contenedor">
<h1>Formulario de registro</h1>

<form action="procesar.php" method="POST">

    Nombre:
    <input type="text" name="nombre" required>
    <br><br>

    Edad:
    <input type="number" name="edad" required>
    <br><br>

    Grupo:
    <input type="text" name="grupo" required>
    <br><br>

    ¿Separas tus residuos?
    <br><br>

    <input type="radio" name="separas" value="Sí" required> Sí
    <input type="radio" name="separas" value="No"> No
    <input type="radio" name="separas" value="Algunas veces"> Algunas veces

    <br><br>

    ¿Qué acciones realizas para cuidar el medio ambiente?
    <br>
    <textarea name="acciones" rows="5" cols="40"></textarea>

    <br><br>

    Selecciona un compromiso:
    <br><br>

    <select name="compromiso" required>
        <option value="Reducir el uso del plástico">Reducir el uso del plástico</option>
        <option value="Separar residuos">Separar residuos</option>
        <option value="Reutilizar materiales">Reutilizar materiales</option>
        <option value="Participar en campañas">Participar en campañas</option>
        <option value="Reciclar aparatos electrónicos">Reciclar aparatos electrónicos</option>
    </select>

    <br><br>

    Comentario y propuesta:
    <br>
    <textarea name="propuesta" rows="5" cols="40"></textarea>

    <br><br>

    <h2>Juego: ¿Dónde va cada residuo?</h2>

    <p>1. ¿Dónde debes depositar una botella de plástico?</p>
    <input type="radio" name="pregunta1" value="Orgánico" required> Orgánico
    <input type="radio" name="pregunta1" value="Inorgánico"> Inorgánico
    <input type="radio" name="pregunta1" value="Electrónico"> Electrónico

    <br><br>

    <p>2. ¿Dónde debes depositar una cáscara de plátano?</p>
    <input type="radio" name="pregunta2" value="Orgánico" required> Orgánico
    <input type="radio" name="pregunta2" value="Inorgánico"> Inorgánico
    <input type="radio" name="pregunta2" value="Electrónico"> Electrónico

    <br><br>

    <p>3. ¿Dónde debes depositar un celular que ya no funciona?</p>
    <input type="radio" name="pregunta3" value="Orgánico" required> Orgánico
    <input type="radio" name="pregunta3" value="Inorgánico"> Inorgánico
    <input type="radio" name="pregunta3" value="Electrónico"> Electrónico

    <br><br>

    <p>4. ¿Dónde debes depositar una lata de aluminio?</p>
    <input type="radio" name="pregunta4" value="Orgánico" required> Orgánico
    <input type="radio" name="pregunta4" value="Inorgánico"> Inorgánico
    <input type="radio" name="pregunta4" value="Electrónico"> Electrónico

    <br><br>

    <p>5. ¿Dónde debes depositar restos de comida?</p>
    <input type="radio" name="pregunta5" value="Orgánico" required> Orgánico
    <input type="radio" name="pregunta5" value="Inorgánico"> Inorgánico
    <input type="radio" name="pregunta5" value="Electrónico"> Electrónico

    <br><br>

    <input type="submit" value="Enviar y finalizar juego">
</div>
</form>

</body>
</html>
