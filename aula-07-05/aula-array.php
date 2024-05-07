<?php

$alunos = array( "yngrid", "livia", "duda", "michele", "hadassa", "geovana", "eduarda", "neto", "yuri");

echo "exemplo com for <br>";
for ($i=0; $i<(count($alunos)); $i++ ) {
    if ($i == 4 ){
    echo $i;
    echo "$alunos[$i] <br> ";
    }
}

echo "exemplo com foreach <br>";
foreach ($alunos as $dados ){
    echo " $dados <br>";
}

?>