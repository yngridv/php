<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> formulário </title>
</head>
<body>

<form action= "listaprod.php"  method= "GET">

<h2> Cadastro </h2>

 <p> Produto: <input type="text" name="produto" /> </p>

 <label for="Marca"> marca </label>
    <select id="marca" name="marca">
      <option value="Miller">Miller</option>
      <option value="Calvin klein">Calvin klein</option>
      <option value="Gucci"> Gucci</option>
      <option value="Diesel "> Diesel </option>
    </select> 

 <label for="Tamanho"> tamanho </label>
    <select id="tamanho" name="tamanho">
    <option value="P"> PP </option>
      <option value="P"> P </option>
      <option value="M"> M </option>
      <option value="G"> G </option>
      <option value="GG"> GG </option>
    </select> 

 <p> PrecoV: <input type="float" name="precoV" /> </p>

 <p> PrecoC: <input type="float" name="precoC" /> </p>

 <p> Cor: <input type="text" name="cor" /> </p>

 <label for="Modelo"> modelo </label>
  <select id="modelo" name="modelo">
    <option value="Wide leg">Wide leg</option>
    <option value="Jogger">Jogger</option>
    <option value="Skinny">Skinny</option>
    <option value="Pantalona">Pantalona</option>
    <option value="Pantacourt">Pantacourt</option>
    <option value="Flare">Flare</option>
    <option value="Reta">Reta</option>
    <option value="Mom">Mom</option>
  </select>
 
 <label for="Genero"> genero </label>
    <select id="genero" name="genero">
      <option value="Feminino"> Feminino </option>
      <option value="Masculino"> Masculino </option>
    </select> 

 <p> DataCompra: <input type="date" name="datacompra" /> </p>

 <p> <input type="submit" value="Enviar"> </p>
 
 </form>
</body>
</html>