<?php 
class Pessoa {

    // Variável constante
    const nome = "Rodrigo";

    // pegando constante
    public function getName() {
        echo self::nome;
    }
    
}
$pessoa = new Pessoa();
$pessoa->getName();

// Classe filha(extendida)
class Rodrigo extends Pessoa {
    const nome = "Cavalcante";
    
    public function getName() {
        // Nessa Class que foi extendida, o  resultado será o nome "Cavalcante", da class filha, pois o quando  usamos o self ele vai fazer referência ao escopo desta classe
        // Se usarmos o "parent" ao invés de "self" , o resultado será o da classe Pai, onde está nossa primeira constante exemplificada na class Pessoa: 
        // echo parent::nome;
        echo self::nome;
    }
}
$rodrigo = new Rodrigo();
$rodrigo->getName();
?>