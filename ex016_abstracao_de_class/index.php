<?php 

// Essa class vai ser um modelo obrigatório para as class que herdarem 
abstract class Banco {

    protected $saldo;
    protected $limiteSaldo;
    protected $juros;
    
    // Estes métodos se tornam obrigatórios para todas as classes derivadas desta por conta de declararmos estes métodos como abstract, porém, podemos ter outros métodos que não são abstratos dentro desta classe abstrata:

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public  function getSaldo() {
        return $this->saldo;
    }

    // Devemos colocar os dados que foram usadas pelas classes herdeiras como parametro na classe de herança, pois deve seguir o modelo abstrato, sendo assim os valores passados são: $s e $d

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}
// Classe que herdou Banco
class Itau extends Banco {

    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<hr> Sacou: " . $s;
    }
    public function Depositar($d) {
        $this->saldo += $d;
        echo "<hr> depositou: " . $d;
    }

}
// Instância de Itau 
$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Depositar(260);
echo "<hr> Saldo:" . $itau->getSaldo();

?>