<?php 
function familyName($fname){
    echo "$fname cavalcante <br>";
};
//exercício 2

echo "<h1> Um Argumento dentro de functions</h1>";
familyName("Joni");
familyName("Deni");
familyName("Roni");
familyName("Laisa");
familyName("Jubileu");
//exercício 1
echo "<h1>Dois Argumentos dentro de functions com d</h1>";
function familyNamey($f2name , $idade){
    echo "$f2name Cavalcante e sua idae é: $idade<br>";
};
echo"<hr>";
familyNamey("Joni", "25");
familyNamey("Deni", "31");
familyNamey("Roni", "21");
familyNamey("Laisa", "26");
familyNamey("Jubileu", "87");
echo"<hr>";
?>
