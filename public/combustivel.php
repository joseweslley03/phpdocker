<?php

class BombaCombustivel {
    private $tipoCombustivel;
    private $valorLitro;
    private $quantidadeCombustivel;

    public function __construct($tipoCombustivel, $valorLitro, $quantidadeCombustivel) {
        $this->tipoCombustivel = $tipoCombustivel;
        $this->valorLitro = $valorLitro;
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }

    public function TipoCombustivel() {
        return $this->tipoCombustivel;
    }

    public function ValorLitro() {
        return $this->valorLitro;
    }

    public function QuantidadeCombustivel() {
        return $this->quantidadeCombustivel;
    }

    public function abastecerPorValor($valor) {
        $litros = $valor / $this->valorLitro;
        if ($litros <= $this->quantidadeCombustivel) {
            $this->quantidadeCombustivel -= $litros;
            return "Você abasteceu " . number_format($litros, 2) . " litros.";
        } else {
            return "Não há combustível suficiente para abastecer R$ " . number_format($valor, 2);
        }
    }
    public function abastecerPorLitro($litros) {
        if ($litros <= $this->quantidadeCombustivel) {
            $valor = $litros * $this->valorLitro;
            $this->quantidadeCombustivel -= $litros;
            return "Você abasteceu " . number_format($litros, 2) . " litros. O valor a ser pago é R$ " . number_format($valor, 2);
        } else {
            return "Não há combustível suficiente para abastecer " . number_format($litros, 2) . " litros.";
        }
    }

    public function reabastecer($litros) {
        $this->quantidadeCombustivel += $litros;
    }

    public function calcularValor($litros) {
        return $litros * $this->valorLitro;
    }

    public function alterarValor($novoValor) {
        $this->valorLitro = $novoValor;
        return "O valor do litro de combustível foi alterado para R$ " . number_format($novoValor, 2);
    }
}

$bomba = new BombaCombustivel("Gasolina", 4.50, 1000);

echo "Tipo de combustível: " . $bomba->TipoCombustivel() . "<br>";
echo "Valor do litro: R$ " . $bomba->ValorLitro() . "<br>";
echo "Quantidade de combustível: " . $bomba->QuantidadeCombustivel() . " litros<br>";
echo '<br>';

echo $bomba->abastecerPorValor(50) . "<br>";
echo "Quantidade de combustível após abastecer: " . $bomba->QuantidadeCombustivel() . " litros<br>";
$bomba->reabastecer(200);
echo "Quantidade de combustível após reabastecer: " . $bomba->QuantidadeCombustivel() . " litros<br>";
echo "Valor do abastecimento de 11.11 litros: R$ " . $bomba->calcularValor(11.11) . "<br>";
echo '<br>';

echo "Tipo de combustível: " . $bomba->TipoCombustivel() . "<br>";
echo "Valor do litro: R$ " . $bomba->ValorLitro() . "<br>";
echo "Quantidade de combustível: " . $bomba->QuantidadeCombustivel() . " litros<br>";
echo $bomba->abastecerPorLitro(30) . "<br>";
echo "Quantidade de combustível após abastecer: " . $bomba->QuantidadeCombustivel() . " litros<br>";
echo '<br>';

echo "Tipo de combustível: " . $bomba->TipoCombustivel() . "<br>";
echo "Valor do litro: R$ " . $bomba->ValorLitro() . "<br>";
echo "Quantidade de combustível: " . $bomba->QuantidadeCombustivel() . " litros<br>";

echo $bomba->alterarValor(4.80) . "<br>";
echo "Valor do litro após alteração: R$ " . $bomba->ValorLitro() . "<br>";


?>