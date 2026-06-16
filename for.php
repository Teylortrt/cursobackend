
<?php

for ( $i = 1; $i <= 10; $i++ ) {
    echo "O número é: $i <br>";
}


$fruats = array("maçã", "banana", "laranja", "uva", "morango");
foreach ( $fruats as $fruta ) {#fruta so existe quando o foreach esta rodando
    echo "A fruta é: $fruta <br>";
}
?>