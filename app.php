<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="proceso.php" method="POST">
        <label for="n1">Digite un número</label>
        <br>
        <input type="number" id="n1" name="n1" required>
        <br>
        <label for="operador">Seleccione una operación</label>
        <br>
        <select name="operador" id="operador" required>
            <option value="" disabled selected>Seleccione</option>
            <option value="+">Sumar</option>
            <option value="-">Restar</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>
        <br>
        <label for="n2">Digite número 2</label>
        <br>
        <input type="number" id="n2" name="n2" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>