<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAAA</title>
    </head>
    <body>
    <h3>Escreva um programa que exiba os números pares de 1 a 50 e os números ímpares de 51 a 100 utilizando um laço de repetição.</h3>
<?php
            echo "<br>";
            echo "Números pares de 1 a 50:<br>";
            for ($i = 2; $i <= 50; $i += 2) {
            echo $i . ",";
            }
            echo "<br>";
            echo "<br>Números ímpares de 51 a 100:<br>";
            for ($i = 51; $i <= 100; $i += 2) {
                echo $i . ",";
            }
?>
<h3>Crie um programa que solicite ao usuário um número e exiba a tabuada desse número utilizando um laço de repetição.</h3>

    <form method="post">
     <label for="num">Número:</label>
     <input type="number" name="num" id="num" required>
    
    </form>
<?php
    if (isset($_POST['num'])) {
        $numero = $_POST['num'];
        echo "<br>Tabuada do $numero:<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
?>
    
</body>
</html>