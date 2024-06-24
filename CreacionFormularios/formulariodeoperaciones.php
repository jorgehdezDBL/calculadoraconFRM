<?php
// Funciones para cada operación aritmética
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero no permitida.";
    }
    return $a / $b;
}

// Capturar y validar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    if (is_numeric($num1) && is_numeric($num2)) {
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        // Realizar la operación seleccionada
        switch ($operacion) {
            case "suma":
                $resultado = suma($num1, $num2);
                break;
            case "resta":
                $resultado = resta($num1, $num2);
                break;
            case "multiplicacion":
                $resultado = multiplicacion($num1, $num2);
                break;
            case "division":
                $resultado = division($num1, $num2);
                break;
            default:
                $resultado = "Operación no válida.";
        }
    } else {
        $resultado = "Error: Ambos valores deben ser números.";
    }
} else {
    $resultado = "Error: Método de solicitud no válido.";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Resultado de la Operación</title>
    <link rel="stylesheet" href="formularioCAL.css">
</head>
<body>
    <div class="container">
    <h1 class="title">Resultado de la Operación</h1>
    <p class="title"><?php echo $resultado; ?></p>
    <a class="subtitle" href="index.html">Volver</a>
    </div>
   
</body>
</html>
