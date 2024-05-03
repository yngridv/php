<?php

$aluno1["nome"] = "Yngrid";
$aluno1["idade"] = "17";
$aluno1["endereço"] = "Rua x";
$aluno1["cidade"] = "Guanambi";
$aluno1["estado"] = "Bahia";
$aluno1["cpf"] = "000.000.000-20";

echo "aluno1: <br>";
foreach ($aluno1 as $x) {
    echo  key($aluno1) . ": $x  <br>";
    next($aluno1);
}

$aluno2["nome"] = "raifran";
$aluno2["idade"] = "17";
$aluno2["endereço"] = "Rua e";
$aluno2["cidade"] = "Guanambi";
$aluno2["estado"] = "Bahia";
$aluno2["cpf"] = "000.000.000-55";

echo "<br>aluno 2: <br>";
foreach ($aluno2 as $x) {
    echo  key($aluno2) . ": $x  <br>";
    next($aluno2);
}

$professor ["nome"] = 'fabio';
$professor ["idade"] = '30';
$professor ["end"] = 'rua c';
$professor ["cidade"] = 'guanambi';
$professor ["estado"] = 'bahia';
$professor ["cpf"] = '000.000.000-22';

echo "<br>professor: <br>";
foreach ($professor as $x) {
    echo  key($professor) . ": $x  <br>";
    next($professor);
}