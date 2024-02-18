<?php 
 echo 'A instrução try...catch...finally'."<br>";

    function divisao($dividendo, $divisor){
        if($divisor == 0 ){
            throw new Exception("Divisão por zero"."<br>");
        }
        return $dividendo / $divisor;
    }

    // A instrução try...catch...finally pode ser usada para capturar exceções. O código no bloco final sempre será executado independentemente de uma exceção ter sido detectada. 
    try{

        echo divisao(5, 0);
    
    }catch(Exception $e){
        echo 'Ipossível dividir'."<br>";
    }finally{
        echo 'Fim do processo'."<br>";
    }

    echo "<hr>";
    
    // USANDO MÉTODOS getMessage(), getLine(), getCode e getFile
    
    echo 'USANDO MÉTODOS getMessage(), getLine(), getCode e getFile'."<br>";
    
    function divisaoNew($dividendo, $divisor)  {

        if($divisor == 0 ){

            throw new Exception("Divisão por zero"."<br>", 1);
        
        }
    }

    try{
        echo divisaoNew(5, 0);
    }catch(Exception $ex){
        $code = $ex -> getCode();
        $file = $ex -> getFile();
        $message = $ex -> getMessage();
        $line = $ex -> getLine();
        echo "Exceção lançada em $file na linha $line: [código: $code] $message";
    }
?>