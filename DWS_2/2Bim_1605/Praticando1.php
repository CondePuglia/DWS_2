<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    .a{
        text-align:center;
    }
</style>
</head>
<body>
    
<div class="container-sm">
    
<h1  class="border-bottom mb-3">Tabuada</h1>

<?php
$numb= filter_input(INPUT_GET,"number",FILTER_SANITIZE_SPECIAL_CHARS);
$cont=0;
if(!empty($numb)){
    while($cont <= 10) {
        $m=$cont * $numb;
        echo "<div class='a'>$numb * $cont = $m </div><br>";
        $cont++;
    }
    echo' <a href="Praticando1.php">Voltar</a> ';
}
if(empty($numb)){
  echo'  <form action="Praticando1.php" method="get" >
  <div class="mb-3">  
  <label for="number">Número: </label>
    <input type="number" id="number" name="number" class="form-control"  required><br>
    <button type="Submit" class="btn btn-success"> Enviar</button>
    <button type="Reset" class="btn btn-danger"> Resetar</button>
</form></div>';
   
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</div>    
</body>
</html>