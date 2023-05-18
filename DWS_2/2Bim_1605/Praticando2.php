<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    .b{ 
        height:7vh;
        width:7vh;
        margin:2vh;
        font-size: 3vh;
            text-align: center;
            color:orange;
         
    }
    .dark{
    background:darkgrey;
    }
.c{
    font-size:6vh;
}
</style>
</head>
<body class="dark">
    
    <div class="container" >
    <h1  class="border-bottom mb-3">Praticando 2 - Criador de quadrados </h1>
    <div  class='row numeros text-center'>
    <a class="col c" href="Praticando2.php?number=1">1</a>
    <a class="col c" href="Praticando2.php?number=2">2</a>
    <a class="col c" href="Praticando2.php?number=5">5</a>
    <a class="col c" href="Praticando2.php?number=8">8</a>
    <a class="col c" href="Praticando2.php?number=11">11</a>
    <a class="col c" href="Praticando2.php?number=32">32</a>
    </div>
   
    
    <div class="row">
    <?php
    $numb= filter_input(INPUT_GET,"number",FILTER_SANITIZE_SPECIAL_CHARS);
    $cont= 0;
    while($cont < $numb){
        $cont++;
        echo "<div class=' alert alert-danger bg-secondary b'>  $cont </div>";
    }
    
    ?>
   </div>
   <a href="Praticando2.php" >Voltar</a>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>