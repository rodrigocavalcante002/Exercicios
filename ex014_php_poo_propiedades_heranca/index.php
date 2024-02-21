<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Acess modifiers (Modificadores de acesso) = É o modo como pode ser acessado as propiedades e métodos de uma class. Existem três tipos de modificadores de acesso: 
        
        // public - Com  este você pode acessar as propiedades e métodos em qualquer lugar (Ele é o padrão).
        
        // protected - Com este você pode acessar métodos e propiedades somente dentro da class ou através de class derivadas desta class. 

        // private - Com este você poderá acessar os métodos e propiedades SOMENTE dentro da class.

        class Fruit 
        {
            public $name;
            protected $color;
            private $weight;
        }

        $mango = new Fruit();
        echo "<p>".$mango -> name = 'Mango'."</p>"; //OK

        // echo "<p>".$mango -> color = 'Yellow'."</p>"; //ERRO

        // echo "<p>".$mango -> weight = '620g'."</p>"; //ERRO

        echo "<hr>";
        //Agora, faremos o mesmo, porém usando modificadore de acesso em nossos métodos

        class Carro 
        {
            
            public $marca;
            public $modelo;
            public $cor;

            // public por padrão:
            function set_marca($n) {
                $this -> marca = $n;
            }
            // protected 
            protected function set_modelo($n) {
                $this -> modelo = $n;
            }
            private function set_cor($n) {
                $this -> cor = $n;
            }
            
        }
        $carro = new Carro();

        $carro -> set_marca('BMW'); //Ok
        // $carro -> set_modelo('E36'); Erro
        // $carro -> set_cor('Azul'); Erro

    ?>
</body>
</html>