<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="styles.css">

    </head>
<body>
<h1> arrays </h1>
<h2> 1- array multidimencional </h2>
<pre>
<?php


$array = [ 
    'alunos' => [

    ['id' => 1,
    'nome' => 'fabio',
    'endereco' => 'rua A',
    'idade' => 20
    ],
    ['id' => 2,
    'nome' => 'juliana',
    'endereco' => 'rua B',
    'idade' => 30
    ],
    ['id' => 3,
    'nome' => 'jose',
    'endereco' => 'rua C',
    'idade' => 10
    ],
    ['id' => 4,
    'nome' => 'marcos',
    'endereco' => 'rua D',
    'idade' => 40
    ],
    ['id' => 5,
    'nome' => 'eduarda',
    'endereco' => 'rua E',
    'idade' => 50
    ],
    ]
]
?>
<!-- crie um array com os dados dos alunos dentro -->
</pre>
    <pre>
        <?php
        print_r($array);
        ?>
         
</pre>
<pre>
        <?php
        print_r($array['alunos'][0]['nome']); 
        echo"<br>";
        print_r($array['alunos'][0]['endereco']); 
    
        ?>  
</pre>


<h1> Tabela </h1>

<table id="customers">
  <tr>
    <th>id</th>
    <th>nome</th>
    <th>endereco</th>
    <th>idade</th>
  </tr>
   <td> <?php print_r($array['alunos'][0]['id'])?> </td>
   <td> <?php print_r($array['alunos'][0]['nome'])?> </td>
   <td> <?php print_r($array['alunos'][0]['endereco'])?> </td>
   <td> <?php print_r($array['alunos'][0]['idade'])?> </td>
   </tr>
   <td> <?php print_r($array['alunos'][1]['id'])?> </td>
   <td> <?php print_r($array['alunos'][1]['nome'])?> </td>
   <td> <?php print_r($array['alunos'][1]['endereco'])?> </td>
   <td> <?php print_r($array['alunos'][1]['idade'])?> </td>
   </tr>
   <td> <?php print_r($array['alunos'][2]['id'])?> </td>
   <td> <?php print_r($array['alunos'][2]['nome'])?> </td>
   <td> <?php print_r($array['alunos'][2]['endereco'])?> </td>
   <td> <?php print_r($array['alunos'][2]['idade'])?> </td>
   </tr>
   <td> <?php print_r($array['alunos'][3]['id'])?> </td>
   <td> <?php print_r($array['alunos'][3]['nome'])?> </td>
   <td> <?php print_r($array['alunos'][3]['endereco'])?> </td>
   <td> <?php print_r($array['alunos'][3]['idade'])?> </td>
   </tr>
   <td> <?php print_r($array['alunos'][4]['id'])?> </td>
   <td> <?php print_r($array['alunos'][4]['nome'])?> </td>
   <td> <?php print_r($array['alunos'][4]['endereco'])?> </td>
   <td> <?php print_r($array['alunos'][4]['idade'])?> </td>

</table>

<h1> Tabela usando for  </h1>

<table id="customers">
  <tr>
    <th>id</th>
    <th>nome</th>
    <th>endereco</th>
    <th>idade</th>
  </tr>
  
  <?php  
  for($i=0; $i<count($array['alunos']); $i++) { ?>
  <tr>
   <td> <?php print_r($array['alunos'][$i]['id'])?> </td>
   <td> <?php print_r($array['alunos'][$i]['nome'])?> </td>
   <td> <?php print_r($array['alunos'][$i]['endereco'])?> </td>
   <td> <?php print_r($array['alunos'][$i]['idade'])?> </td>
   </tr>

 <?php } ?>   
?> 
</table>


</body>
</html>

