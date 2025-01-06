<?php 
// Para declarar uma interface se usa a palvra-chave interface e em seguida o nome que é desejado atribuir
// Seus métodos devem ser públicos
interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();

}
// Não é usado a palavra-chave "extends" e sim "implements".
// Todos os métodos que estão na interface devemos inserir na class, até mesmo caso formos passar algum dado, ele deve ser inserido como parâmetro no método da interface e no método da class - representado aabaixo: 
class Noticia implements Crud {
    public function create($data) {
        // Lógica para criar a notícia
    }
    public function read() {
        // Lógica para ler a notícia
    }
    public function update() {
        // Lógica para atualizar a notícia 
    }
    public function delete() {
        // Lógica para deletar a notícia
    }
}
?>