
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="styles.css">

    </head>
<body>
<h1> Exercicio </h1>
<h2> 1 - Array com alunos e notas </h2>
<pre>
<?php

$alunos_notas = array(
    array("nome" => "Yngrid", "nota" => 9.0),
    array("nome" => "Livia", "nota" => 7.5),
    array("nome" => "Maria", "nota" => 8.5),
    array("nome" => "Eduarda", "nota" => 1.5),
    array("nome" => "Fernando", "nota" => 3.5),
    array("nome" => "Luiz ", "nota" => 2.0),
   
);

print_r($alunos_notas);

?> </pre>

<h2> 2- Imprimir apenas alunos aprovados ( notas maior que 7 ) </h2>
<pre>
<?php
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 7) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?> </pre>

<h2> 3- Imprimir apenas alunos reprovados ( notas menor que 3 ) </h2>
<pre>
<?php
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] < 3) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?> </pre>

<h2> 4- Imprimir apenas os alunos na final ( notas maior que 3 ) </h2>
<pre>
<?php
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 3 && $aluno['nota'] <= 10) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?> </pre>

</body>