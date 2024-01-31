<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex013</title>
</head>
<body>
    <h1>valor do argumento padrão php</h1>
    <?php 
    
    function  setHeight(int $minheight = 50)
    {
        echo "the min height is: $minheight <br>";
    }
    setheight(30);
    setheight();
    setheight(364);
    setheight(65);
    setheight(78);

    ?>
    <pre> 
        function  setHeight(int $miheight = 50)
        {
            echo "the min height is:$miheight";
        }
        setheight(30);
        setheight();
        setheight(364);
        setheight(65);
        setheight(78);
    </pre>
    <h1>declaração do tipo retorno</h1>
    <?php 
    
    function exemplo1(float $a, float $b)
    :float{
        return $a + $b;
        echo "<br>";
    }
    echo "<hr>".exemplo1(1.5 , 5.2 )." exemplo 1 <hr><br>";
    ;
    //exemplo 2:

    function exemplo2( float $a, float $b)
    :int{
        return $a + $b;
    }
     echo "<hr>".exemplo2(1.5, 5.2). " exemplo 2 <hr>";
    ?>
    <pre>
        <code>
        <p>
        function exemplo1(float $a, float $b)
    :float{
        return $a + $b;
        echo;
    }
    echo exemplo1(1.5 , 5.2 )."";
    
    //exemplo 2:

    function exemplo2( float $a, float $b)
    :int{
        return $a + $b;
    }
     echo exemplo2(1.5, 5.2);
        </p>
    </code>
</pre>
    <h1>Passando argumentos por referências</h1>
    <?php 
    function exemplo1_(& $a = 3)
    {
        $a += 5;
    }
    $num = 2;
    exemplo1_($num);
    echo "<hr>$num <br> <hr>";
    ?>
    <pre>
        <code>
    function exemplo1_(& $a = 3)
    {
        $a += 5;
    }
    $num = 2;
    exemplo1_($num);
    echo "$num ";

        </code>
    </pre>
    
</body>
</html>