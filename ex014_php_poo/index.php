
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progamação Orientada a Objetos 'POO / OOP'</title>
</head>
<body>
<?php 
    class Carro
    {
        // PROPIEDADES(São estruturas em uma classe que definem o acesso a informações dentro dela. )
        public $modelo;
        public $cor;
        
        // MÉTODOS(ações que podem ser executadas)
        function set_name($modelo) {
            $this -> modelo = $modelo;
        }

        function get_name() {
           return $this -> modelo;
        }

    }
    // Object operator(->) Este é um operador usado para acessar os métodos de um objeto
    $bmw = new Carro();
    $mercedes_benz = new Carro();
    
    $bmw -> set_name('E36');
    $mercedes_benz -> set_name('c_180');

    echo $bmw -> get_name()."<br>";
    echo $mercedes_benz -> get_name()."<br>";
    
    echo "<hr>";
    //UMA MANEIRA MAIS FACIL DE ALTERAR OS VALORES DAS PROPIEDADES SEM USAR UM UMA FUNÇÃO E FORA DA CLASS

    class Fruto
    {
        public $nome;
        public $cor;
    }
    $manga = new Fruto();
    $manga -> nome = "Manga";
    echo "O nome da fruta é: ".$manga -> nome;
    
    //TEM COMO DEIXAR MAIS SIMPLES CRIANDO UMA FUNÇÃO '__construct()'. SERVE PARA INICIALIZAR AS PROPIEDADES APÓS A CRIAÇÃO DE UM OBJETO. O PHP CHAMARÁ A FUNÇÃO AUTOMATICAMENTE SE VOCÊ CRIAR UM OBJETO A PARTIR DE UMA CLASS.

    class Pessoa
    {
        public $idade;
        public $endereco;
        public $produto;
        
        function __construct($idade, $endereco, $produto) {
            $this -> idade = $idade;
            $this -> endereco = $endereco;
            $this -> produto = $produto;
        }
        function get_idade() {
            return $this -> idade;
        }
        function get_endereco() {
            return $this -> endereco;
        }
        function get_produto() {
            return $this -> produto;
        }
    }

    $pessoa = new Pessoa("23", "Brasil Jequié-BA", "BMW");

    echo "Idade é: ".$pessoa -> get_idade();
    echo "<br>";
    echo "endereço é: ".$pessoa -> get_endereco();
    echo "<br>";
    echo "A compra do usuário foi: ".$pessoa -> get_produto();

    echo "<hr>";
    //EXISTE TAMBÉM A POSSIBILIDADE DE CRIAR UMA FUNÇÃO '__destruct()'. ESSA FUNÇÃO SERVE PARA DESTRUIR OBJETOS ESPECIFICADOS, SENDO DESTRUIDOS NO FIM DO SCRIPT OU AO ENCERRAR OU O INTERROMPIMETO. 
    //Um destruidor é chamado quando o objeto é destruído ou o script é interrompido ou encerrado.
    //O exemplo abaixo possui uma função __construct() que é chamada automaticamente quando você cria um objeto a partir de uma classe, e uma função __destruct() que é chamada automaticamente no final do script:
    class Planta
    {
        public $tipo;
        public $significado;
        
        function __construct($tipo, $significado) {
            $this -> tipo = $tipo;
            $this -> significado = $significado;
        }

        function __destruct() {
            echo "O tipo de flor é {$this -> tipo} e o significado é {$this -> significado}.";
        }
    }
    $planta = new Planta("Jacinto", "tristeza ou coração alegre");
?>
</body>
</html>