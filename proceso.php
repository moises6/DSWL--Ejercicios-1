<?php
$num1 = isset($_POST['n1']) ? $_POST['n1'] : null;
$num2 = isset($_POST['n2']) ? $_POST['n2'] : null;
$operador = isset($_POST['operador']) ? $_POST['operador'] : null;

if ($num1 === null || $num2 === null || $operador === null) {
    echo "Por favor complete todos los campos.";
} else {
    switch ($operador) {
        case "+":
            $resultado = $num1 + $num2;
            echo "La respuesta de la operación es: " . $resultado;
            break;
        case "-":
            $resultado = $num1 - $num2;
            echo "La respuesta de la operación es: " . $resultado;
            break;
        case "*":
            $resultado = $num1 * $num2;
            echo "La respuesta de la operación es: " . $resultado;
            break;
        case "/":
            if ($num2 == 0) {
                echo "No se puede dividir por cero.";
            } else {
                $resultado = $num1 / $num2;
                echo "La respuesta de la operación es: " . $resultado;
            }
            break;
        default:
            echo "Operador no válido. Por favor seleccione una operación válida.";
    }
}
