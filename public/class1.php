<?php
class Produto {
    //private $valor = 10;
    //private $nome = 'Pão';

    public function __construct($nome , $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function pegarValor(){
        echo $this->valor . '<br>';
    }
    public function pegarNome(){
        echo $this->nome . '<br>';
    }

    public function alterarValor($valor){
        $this->valor = $valor;
    }

    public function alterarNome($nome){
        $this->nome = $nome;
    }
}

$tapioca = new Produto('tapioca', 8);
$arrozladrao = new Produto('arrozladrao' , 15);
$tapioca->pegarNome();
$tapioca->pegarValor();

$arrozladrao->pegarNome();
$arrozladrao->pegarValor();

?>

<?php
class Bola {
    public $cor;
    public $circunferencia;
    public $material;

    public function __construct($cor, $circunferencia, $material)
    {
        $this->atribuirCor($cor);
        $this->atribuirCircunferencia($circunferencia);
        $this->atribuirMaterial($material);
    }

    public function mostrarCor(){
        echo $this->cor() . '<br>';
    }

    public function cor(){
        return $this->cor;
    }

    public function trocarCor($cor_nova){
        $this->atribuirCor($cor_nova);
    }

    public function atribuirMaterial($valor_material){
        $this->material = $valor_material;
    }

    public function atribuirCircunferencia($valor_circunferencia){
        $this->circunferencia = $valor_circunferencia;
    }

    public function atribuirCor($cor){
        $this->cor = $cor;
    }
}

$bola1 = new Bola('Branca', 68, 'Couro');
