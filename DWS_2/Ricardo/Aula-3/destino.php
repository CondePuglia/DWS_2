<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
    <h1 >Destino</h1>
    <hr>
    <?php
    

  
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_GET,"cor", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado : $nome<br> Email: $email</p>"; 
    ?> 
    <p>  
     <a href="destino.php?nome=Ricardo&email=ricardo@gmail.com&cor=<?=$cor?>"> Link 1 meu nome</a>
     </p>
     <p>  
     <a href="destino.php?nome=Oswaldo&email=Valdinho@gmail.com&cor=<?=$cor?>"> Link 2 meu nome</a>
     </p>
     <a href="destino.php">limpar tudo</a>
     <div class="estrutura">
    <div>
       <a href="destino.php?cor=darkred&nome=<?=$nome?>&email=<?=$email?>"> <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png" alt="red" "></a>
    </div>
    <div>
        <a href="destino.php?cor=darkgreen&nome=<?=$nome?>&email=<?=$email?>"><img src="data:image/jpeg;base64,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" alt="green"></a>

    </div>
    <div>
    <a href="destino.php?cor=lightblue&nome=<?=$nome?>&email=<?=$email?>"><img src="data:image/jpeg;base64,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" alt="blue"></a>
    </div>
    </div>
    <style>
        body{
            background-color: <?php echo $cor?>;
        }
    </style>
</body>
</html>