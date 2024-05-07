<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
p {
    background-color: pink ;
}
</style>
    <?php

    $aluno1["nome"] = "Yngrid";
    $aluno1["idade"] = 17;
    $aluno1["endereço"] = "Rua A";
    $aluno1["cidade"] = "Guanambi";
    $aluno1["estado"] = "Bahia";
    $aluno1["cpf"] = "000.000.000-55";
    
    $aluno2["nome"] = "Rayfran";
    $aluno2["idade"] = 17;
    $aluno2["endereço"] = "Rua B";
    $aluno2["cidade"] = "Guanambi";
    $aluno2["estado"] = "Bahia";
    $aluno2["cpf"] = "000.000.000-88";

    $aluno3["nome"] = "Yuri";
    $aluno3["idade"] = 17;
    $aluno3["endereço"] = "Rua D";
    $aluno3["cidade"] = "Guanambi";
    $aluno3["estado"] = "Bahia";
    $aluno3["cpf"] = "000.000.000-22";
    
    $professor["nome"] = "Fábio";
    $professor["idade"] = 40;
    $professor["endereço"] = "Rua C";
    $professor["cidade"] = "Guanambi";
    $professor["estado"] = "Bahia";
    $professor["cpf"] = "000.000.000-10";
    
    echo "<p> Aluno 1: </p>";
    foreach ($aluno1 as $x) {
        echo  key($aluno1) . ": $x  <br>";
        next($aluno1);
    }
    echo "<br><p>Aluno 2: </p><br>";
    foreach ($aluno2 as $x) {
        echo  key ($aluno2) . ": $x  <br>";
        next($aluno2);
    }

    echo "<br><p>Aluno 3: </p><br>";
    foreach ($aluno3 as $x) {
        echo  key ($aluno3) . ": $x  <br>";
        next($aluno3);
    }

    echo "<br><p>Professor: </p> <br>";
    foreach ($professor as $x) {
        echo  key($professor) . ": $x  <br>";
        next($professor);
    }
    ?>

</body>
</html>