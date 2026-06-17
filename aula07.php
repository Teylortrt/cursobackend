<?php  





$texto = "tenho 10 morango e 25 laranjas"

preg_match_all('/[0-9]+/', $texto, $resultado)
print _r($resultado);
echo'<br>';

#valida email
$email = "usuario@dominio.com";
if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
    echo "Email válido";
} else {
    echo "Email inválido";
}
echo "<br>";
?>