<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista </title>
</head>
<style>
        
  
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background color: #000600;
}

</style>
    
    <body>
<h2> lista do cadastro </h2>
<table>

<tr>
<th>Produto</th>
<th>Marca</th>
<th>Tamanho</th>
<th>PrecoV</th>
<th>PrecoC</th>
<th>Cor</th>
<th>Modelo</th>
<th>Genero</th>
<th>DataCompra</th>
</tr>

<tr>
    <td><?php echo $_GET['produto'];?></td>
    <td><?php echo $_GET['marca'];?></td>
    <td><?php echo $_GET['tamanho'];?></td>
    <td><?php echo $_GET['precoV'];?></td>
    <td><?php echo $_GET['precoC'];?></td>
    <td><?php echo $_GET['cor'];?></td>
    <td><?php echo $_GET['modelo'];?></td>
    <td><?php echo $_GET['genero'];?></td>
    <td><?php echo $_GET['datacompra'];?></td>
  </tr>
  </table>
</body>
</html>