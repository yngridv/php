<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2> array lista ordenada </h2>

     <style>
p {
    background-color: pink;
}
</style>

<?php
$aluno = array( "nome" => "yuri ", 
"idade" => 9, 
"end" => "rua X", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-22");

echo "<p> Aluno 1 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["cpf"] . "<br>";

echo "<br>";

$aluno1 = array( "nome" => "Yngrid", 
"idade" => 17, 
"end" => "rua A", 
"cidade"=> "Guanambi",
"estado"=> "Bahia", 
"cpf"=> "000.000.000-55");

echo "<p> Aluno 2 </p>" ;

echo $aluno1["nome"] ."<br>";
echo $aluno1["idade"] ."<br>";
echo $aluno1["end"] . "<br>";
echo $aluno1["cidade"] . "<br>";
echo $aluno1["estado"] . "<br>";
echo $aluno1["cpf"] . "<br>";

echo "<br>";


$aluno2 = array( "nome" => "Raifran", 
"idade" => 17, 
"end" => "rua B", 
"cidade"=> "Guanambi",
"estado"=> "Bahia", 
"cpf"=> "000.000.000-88");

echo "<p> Aluno 3 </p>" ;

echo $aluno2["nome"] ."<br>";
echo $aluno2["idade"] ."<br>";
echo $aluno2["end"] . "<br>";
echo $aluno2["cidade"] . "<br>";
echo $aluno2["estado"] . "<br>";
echo $aluno2["cpf"] . "<br>";

echo "<br>";


$professor = array( "nome" => "Fabio", 
"idade" => 40, 
"end" => "rua C", 
"cidade"=> "Guanambi",
"estado"=> "Bahia", 
"cpf"=> "000.000.000-10");

echo "<p> Professor </p>" ;

echo $professor["nome"] ."<br>";
echo $professor["idade"] ."<br>";
echo $professor["end"] . "<br>";
echo $professor["cidade"] . "<br>";
echo $professor["estado"] . "<br>";
echo $professor["cpf"] . "<br>";

?>

</body>
</html>

