<?php
# EXPRESSOES REGULARES
# REGEX
# buscar uma palavra em uma frase

$frase = "Estou estudando php";

if(preg_match("/php/", $frase)){
    echo "Palavra encontrada";
}else{
    echo "Palavra não encontrada";
}
echo "<br>";

# verificar se existe algum numero no texto

$texto = "Meu codigo e diego";

if(preg_match("/[0-9]/", $texto)){
    echo "Existe numero";
}else{
    echo "Nao existe numero";
}
echo "<br>";

# encontrar todos os numero

$texto = "Tenho 10 morango e 25 laranjas";

preg_match_all("/[0-9]+/", $texto, $resultado);
print_r($resultado);
echo "<br>";

# validar email

$email = "usuario@email.com";

if (preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i", $email)) {
    echo "E-mail válido";
} else {
    echo "E-mail inválido";
}
echo "<br>";

#### Validar um telefone

$telefone = "(51) 99999-9999";

if (preg_match("/^\(\d{2}\)\s\d{5}-\d{4}$/", $telefone)) {
    echo "Telefone válido";
} else {
    echo "Telefone inválido";
}
echo "<br>";
#### Extrair datas de um texto

$texto = "
Reunião: 10/06/2026
Entrega: 15/06/2026
";

preg_match_all("/\d{2}\/\d{2}\/\d{4}/", $texto, $datas);

print_r($datas[0]);
echo "<br>";


#### Substituir palavras

$texto = "Estou estudando PHP";

$novoTexto = preg_replace("/PHP/", "Python", $texto);

echo $novoTexto;
echo "<br>";

#### Substituir todos os números por X

$texto = "Apartamento 123";

echo preg_replace("/[0-9]/", "X", $texto);
echo "<br>";
#### Verificar se uma senha contém números

$senha = "abc123";

if (preg_match("/[0-9]/", $senha)) {
    echo "A senha possui números.";
} else {
    echo "A senha não possui números.";
}
echo "<br>";

#### Dividir uma frase em palavras
$frase = "PHP Java Python C#";

$palavras = preg_split("/\s/", $frase);

print_r($palavras);
echo "<br>";

# validar se uma senha e forte
$senha = "Teste456";

$padrao = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/";

if (preg_match($padrao, $senha)) {
    echo "Senha forte";
} else {
    echo "Senha fraca";
}


?>