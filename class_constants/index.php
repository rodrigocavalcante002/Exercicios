<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Podem ser Úteis quando é necessário criar dados contantes dentro de uma class
        //Ela é declarada dentro de uma class com a palavra-chave "const". Ela não pode ser alterada após declarada.
        //Ela se direncia de letras minúsculas e maiúsculas, porém é recomendável utilizar letras maiúsculas.
        //Podemos acessar uma constante fora da class usando o nome da class seguido do operador de resolução de escopo (::) e por fim adicionando o nome da constante.

        class Goodbye
        {
            const LEAVING_MESSAGE = "Thanks you for visit my web site!";
        }
        echo Goodbye()::LEAVING_MESSAGE;
    ?>
</body>
</html>