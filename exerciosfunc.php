16. Crie um programa que leia duas palavras e as concatene, exibindo a palavra resultante.
<form method="post">
     <label for="palavra1">Palavra 1:</label>
     <input type="text" name="palavra1" id="palavra1" required>
     <br>
     <label for="palavra2">Palavra 2:</label>
     <input type="text" name="palavra2" id="palavra2" required>
     <br>
     <input type="submit" value="Concatenar" name="concatenar">
 </form>
 <?php
if (isset($_POST['concatenar'])) {
    $palavra1 = $_POST['palavra1'];
    $palavra2 = $_POST['palavra2'];
    $palavra_resultante = $palavra1 . $palavra2;
    echo "Palavra resultante: " . $palavra_resultante;
}
?>
17. Faça um programa que receba uma palavra e exiba cada letra separadamente.
<form method="post">
    <label for="palavra">Palavra:</label>
    <input type="text" name="palavra" id="palavra" required>
    <br>
    <input type="submit" value="Separar" name="separar">
</form>
<?php
if (isset($_POST['separar'])) {
    $palavra = $_POST['palavra'];

    $letras = str_split($palavra);

    foreach ($letras as $letra) {
        echo $letra . "<br>";
    }
}
?>
