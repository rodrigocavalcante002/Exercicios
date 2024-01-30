<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores de repetição</title>
</head>
<body>
    <h1>Primeiro exercício</h1>
    <h2>Usando o operador <mark>Do...While</mark></h2>
    <?php 
    
        $x=1;
        do{
            echo "<p>O número é: $x </p><br>";
             $x++;
        }while($x <=5);
    ?>
    <h1>Segundo exercício</h1>
    <h2>Usando o operador <mark>For</mark></h2>
        <?php 
            for($x=0; $x <=10; $x++){
                echo "O número é: $x <br>";
            };
        ?>
        

</body>
</html>