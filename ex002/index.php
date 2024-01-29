<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercícios com variáveis</title>
</head>
<body>
    <?php 
        //arrays
        
        echo "<h1>carros</h1>";
       $carros = array("bmw", "mazda", "honda", "mercedes");
       echo "<br>";
       echo $carros[0];
       echo "<br>";
       $carros[] = "camaro";
       print_r($carros);

       echo "<br>";
        //especificando
       $carros[10] = "lamborguine" ;
       print_r($carros);
       //sengunda forma dde criar array
        echo "<br>";
        echo "<h1>motos</h1>";
       $motos = array();
       $motos [] = "honda";
       $motos [] = "yamaha";
       $motos [5] = "suzuki";
       $motos [] = "bmw";
       print_r($motos);
       echo $motos[5];
       //terceira forma
       $clientes = ["Rodrigo","Felipe","jhon","Gaby"];
       echo "<h1>Clientes</h1>";
       print_r($clientes)
    ?>
</body>
</html>