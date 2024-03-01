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

// private - Com este você poderá acessar os métodos e propiedades SOMENTE dentro da class e os nem as classes que herdaram(extends) poderam acessar.
class Veiculo 
{
    // Propiedades
    protected $modelo;
    public $cor;
    public $ano;
    private $outrosModelos;

    // Métodos
    public function Ligar() {
        echo "Ligou <br>";
    }
    public function Desligar() {
        echo "Desligou <br>";
    }
    
    // Coseguiremos acessar a propiedade $outrosModelos somente dentro desta classe, porque ela é privada.
    public function SetOutrosModelos($outrosM) {
        $this->outrosModelo = $outrosM;
    }
    public function GetOutrosModelos() {
        return $this->outrosModelo;
    }
    
     
}

// Classes herdando métodos/funções básicas da classe Veiculo
// As classes podem ter funções específicas 

class Carro extends Veiculo
{
     // Acessando propiedade protegida
     public function SetModelo($m) {
        $this->modelo = $m;
    }
    // Retornando o modelo
    public function GetModelo() {
        return $this->modelo;
    }

    // Função específica do carro
    public function AbrirPortas() {
        echo "Portas abriram em 3s <br>";
    }
}

class Moto extends Veiculo
{
     // Acessando propiedade protegida
     public function SetModelo($m) {
        $this->modelo = $m;
    }
    // Retornando o modelo
    public function GetModelo() {
        return $this->modelo;
    }
    // Função específica da moto
    public function Tripe() {
        echo "Abaixando tripé em 3s <br>";
    }
}
// istância de Veículo para acessar a propiedade Protected $outrosModelos
$outrosModelos = new Veiculo();
$outrosModelos->SetOutrosModelos("Mercedes");
echo $outrosModelos->GetOutrosModelos();

echo "<hr>";

// Instância
$carro = new Carro();
// Setando valor na propiedade $modelo Protected
$carro->SetModelo("Bmw");
$carro->cor = "Azul";
$carro->ano = "2006";
var_dump($carro);

// Funções comuns em um veículo
$carro->Ligar();
$carro->Desligar();
// Função específica
$carro->AbrirPortas();
echo "<hr>";

$moto = new Moto();
// Setando valor na propiedade $modelo Protected
$moto->SetModelo("Biz");
$moto->cor = "Branca";
$moto->ano = "2019";
var_dump($moto);

// Funções comuns em um veículo
$moto->Ligar();
$moto->Desligar();
// Função específica
$moto->Tripe();
echo "<hr>";
// Segundo exemplo

// Métodos com modificadores de acsso
class Onibus 
{
    public $cor;
    public $ano;
    public $destino;

    // Métodos

    private function PontoPartida(){
        echo "Rio de Janeiro";
    }

    // Método que irá acessar o Método privado
    
    public function MostrarPontoPartida() {
        $this->PontoPartida();
    }
}

$onibus = new Onibus();

echo $onibus->MostrarPontoPartida();
// obs: Se tentarmos fazer uma class que herde ônibus, irá dar um erro, pois só podemos acessar o método 'PontoPartida' dentro do escopo da class (Onibus). Isso ocorrerá porque o método 'PontoPartida' é privado, ou seja, só podemos acessá-lo dentro da classe que ela foi declarada.;' 

?>
</body>
</html>