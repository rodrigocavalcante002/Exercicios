<?php 
// Os métodos static ou métodos da classe são funções que não dependem de nenhuma variável de instância, quando invocados executam uma função sem a dependência do conteúdo de um objeto ou a execução da instância de uma classe, conseguindo chamar direto qualquer método da classe e também manipulando alguns campos da classe

// Como criar:
$array = array("Arroz", "Melão", "Batata");
class Mercado {
    // Atributos/Propiedade
    public static $produtos;

    public static function Produtos() {
        echo "Os produtos são: " . self::$produtos;
    }
}
foreach($array as Mercado::$produtos);
// Mercado::$produtos = "arroz";
echo Mercado::Produtos();

?>