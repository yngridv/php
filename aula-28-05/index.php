<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Exercicio constantes </h1>
<h2> 4.6 Constantes: </h2>
<?php 
 define("PI", 3.1415);
echo PI; 
?>

<h2> 4.6.1 Constantes Pré-definidas: </h2>
<?php
 function funcConsts() {
 echo "ARQUIVO: ".__FILE__."<br>";
 echo "DIRETÓRIO: ".__DIR__."<br>";
 echo "LINHA: ".__LINE__."<br>";
 echo "FUNÇÃO: ".__FUNCTION__."<br>";
} 
 funcConsts();

class veiculo {
 private $marca;
 function __construct() {
 echo "CLASSE: ".__CLASS__."<br>";
 }
function setMarca($marca) { $this->marca = $marca;
 echo "MÉTODO: ".__METHOD__."<br>"; 
} } 
$obj = new veiculo(); 
 $obj->setMarca("Wolksvagem");
 ?>

<h2>  4.7 Variaveis Superglobais (pré-definidas) </h2>
<?php
 $vars_pre = get_defined_vars();
 print_r($vars_pre);
?>

<h2>  4.8 - Funções - PHP  </h2>
<?php
 function nome_funcao($par_1 = 0, $par_2 = "vazio") {
 echo "Código da Função <br>";
 return "Dado de Retorno: ".$par_1."/".$par_2;
 }
 $retorno = nome_funcao();
 echo $retorno."<br><br>";
 $retorno = nome_funcao(12, "Bill Gates");
 echo $retorno."<br><br>";
?>

<h2>  Função soma  </h2>
<?php 
function soma( ) {
$A1 = 10;
$A2 = 20;
echo $A1 + $A2;
}
Soma ();
?>

<h2>  Função soma com parametro  </h2>
<?php
function soma_parametro ($P1, $P2) {
echo $P1 + $P2;
}
soma_parametro (5,8);
echo "<br>";
soma_parametro (10,5);
?>

<h2>  Função soma e multiplica </h2>
<?php
function soma_multiplica ($P1, $P2, $P3) {
$soma = $P1 + $P2; 
$resultado = $soma * $P3;
echo "O resultado da soma é $resultado";
}
soma_multiplica (2,2,4);
echo "<br>";
soma_multiplica (5,2,4);
?>

<h2> Função todas as  operações </h2>
<?php
 function exemplo ($P1, $P2){
 $soma = $P1 + $P2;
 $mul  = $soma * $P1;
 $sub  = $mul - $P2;
 $div  = $sub / $P1;

return ($div);
}
echo exemplo (5,10);
echo "<br>";
echo exemplo (4,10);
?>

<h2> Função elevando ao quadrado </h2>
<?php
 function E2 ( $P1 ) {
    $resultado = $P1 * $P1;
    return $resultado;
 } 
 echo E2(8);
?>
</body>
</html>