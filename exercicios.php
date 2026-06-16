1. Escreva um programa que solicite ao usuário dois números e exiba a soma, subtração, multiplicação e divisão entre eles.

<!DOCTYPE html>
<html>
<body></body>

<form method="post">
     <label for="num1">Número 1:</label>
     <input type="number" name="num1" id="num1" required>
     <br>
     <label for="num2">Número 2:</label>
     <input type="number" name="num2" id="num2" required>
     <br>
     <input type="submit" value="soma" name="soma">
        <input type="submit" value="subtração" name="subtracao">
        <input type="submit" value="multiplicação" name="multiplicacao">
        <input type="submit" value="divisão" name="divisao">
     
 </form>


<?php

if (isset($_POST["num1"]) && isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $Soma = $num1 + $num2;
    $Subtracao = $num1 - $num2;
    $Multiplicacao = $num1 * $num2;
    $Divisao = $num2 != 0 ? $num1 / $num2 : "Erro: Divisão por zero";
} else {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "Por favor, insira dois números.";
    }
}

if (isset($_POST["soma"])) {
    echo "A soma é: $Soma <br>";
} else if (isset($_POST["subtracao"])) {
    echo "A subtração é: $Subtracao <br>";
} 
else if (isset($_POST["multiplicacao"])) {
    echo "A multiplicação é: $Multiplicacao <br>";
} 
else if (isset($_POST["divisao"])) {
    echo "A divisão é: $Divisao <br>";
} 
else {
    echo "Nenhuma operação resultou em zero.";
}

?>
<br>
</body>
</html>

2. Escreva um programa que calcule a média aritmética de dois números.
<form method="post">
     <label for="num1">Número 1:</label>
     <input type="number" name="num1" id="num1" required>
     <br>
     <label for="num2">Número 2:</label>
     <input type="number" name="num2" id="num2" required>
     <br>
     <input type="submit" value="Calcular Média" name="calcular_media">
 </form>
<?php
if (isset($_POST["num1"]) && isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $media = ($num1 + $num2) / 2;
    echo "A média aritmética é: $media <br>";
} else {
    echo "Por favor, insira dois números para calcular a média.";
}
?>
3. Crie um programa que calcule e exiba a média aritmética de três notas informadas pelo usuário.
<form method="post">
     <label for="nota1">Nota 1:</label>
     <input type="number" name="nota1" id="nota1" step="any" required>
     <br>
     <label for="nota2">Nota 2:</label>
     <input type="number" name="nota2" id="nota2" step="any" required>
     <br>
     <label for="nota3">Nota 3:</label>
     <input type="number" name="nota3" id="nota3" step="any" required>
     <br>
     <input type="submit" value="Calcular Média" name="calcular_media">
 </form>
<?php
if (isset($_POST["nota1"]) && isset($_POST["nota2"]) && isset($_POST["nota3"])) {
    $nota1 = (float) str_replace(',', '.', $_POST["nota1"]);
    $nota2 = (float) str_replace(',', '.', $_POST["nota2"]);
    $nota3 = (float) str_replace(',', '.', $_POST["nota3"]);
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "A média aritmética é: " . number_format($media, 2) . " <br>";
} else {
    echo "Por favor, insira as três notas para calcular a média.";
}