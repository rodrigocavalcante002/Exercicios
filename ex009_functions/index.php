<?php 
// FUNÇÃO PARA SOMAR AS NOTAS E CALCULAR O RESULTADO FINAL
function calculo_media($aluno, $n1, $n2, $n3){
    $media = ($n1 + $n2 + $n3) / 3;
    if($media >= 5.0){
        echo "$aluno foi aprovado com $media. <br>";
    }else{
        echo "$aluno foi reprovado com $media. <br>";
    }
}
// INSERINDO ALUNO E NOTAS
calculo_media("Rodrigo", 10, 7, 8.5);
calculo_media("Vanessa", 10, 7, 8.5);
calculo_media("Goulart", 0, 3, 8.5);
echo "<hr>";

// RETORNANDO
function soma($a, $b){
    $result = $a + $b;
    return($result);
}
echo "A soma foi ". soma(10, 2);
echo "<hr>";
// SE COLOCARMOS O RETURN DESTA FORMA, TODO COMANDO FEITO DEPOIS DELE VAI SER IGNORADO.
function soma2($a, $b){
    return;
    $result = $a + $b;
    echo $result;
    
}
echo "A soma foi ". soma2(10, 2);
?>
