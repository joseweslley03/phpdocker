<?php 
    echo('Alô Mundo, Weslley')
?> <br>


<form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if (is_numeric($numero)) {
            echo "<p>O número informado foi: $numero</p>";
        } else {
            echo "<p>Digite um número válido.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="text" id="numero1" name="numero1">
        <br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="text" id="numero2" name="numero2">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        if (is_numeric($numero1) && is_numeric($numero2)) {
            $soma = $numero1 + $numero2;
            echo "<p>A soma de $numero1 + $numero2 é: $soma</p>";
        } else {
            echo "<p>Digite dois números válidos.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="nota1">Digite a primeira nota:</label>
        <input type="text" id="nota1" name="nota1"><br>

        <label for="nota2">Digite a segunda nota:</label>
        <input type="text" id="nota2" name="nota2"><br>

        <label for="nota3">Digite a terceira nota:</label>
        <input type="text" id="nota3" name="nota3"><br>

        <label for="nota4">Digite a quarta nota:</label>
        <input type="text" id="nota4" name="nota4"><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        
        if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)) {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            echo "<p>A média das notas $nota1, $nota2, $nota3 e $nota4 é: $media</p>";
        } else {
            echo "<p>Digite quatro notas válidas.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="metros">Digite o valor em metros:</label>
        <input type="text" id="metros" name="metros">
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $metros = $_POST["metros"];
        if (is_numeric($metros)) {
            $centimetros = $metros * 100;
            echo "<p>$metros metros é igual a $centimetros centímetros.</p>";
        } else {
            echo "<p>Digite um valor numérico válido.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="raio">Digite o raio do círculo:</label>
        <input type="text" id="raio" name="raio">
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $raio = $_POST["raio"];
        if (is_numeric($raio)) {
            $area = pi() * pow($raio, 2);
            echo "<p>A área do círculo com raio $raio é: $area</p>";
        } else {
            echo "<p>Digite um valor numérico válido.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="lado">Digite o lado do quadrado:</label>
        <input type="text" id="lado" name="lado">
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST["lado"];
        if (is_numeric($lado)) {
            $area = pow($lado, 2);
            $dobro_area = 2 * $area;
            echo "<p>A área do quadrado com lado $lado é: $area</p>";
            echo "<p>O dobro da área é: $dobro_area</p>";
        } else {
            echo "<p>Digite um valor numérico válido.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="salario_hora">Quanto você ganha por hora?</label>
        <input type="text" id="salario_hora" name="salario_hora"><br>

        <label for="horas_trabalhadas">Número de horas trabalhadas no mês:</label>
        <input type="text" id="horas_trabalhadas" name="horas_trabalhadas"><br>

        <input type="submit" value="Calcular Salário">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario_hora = $_POST["salario_hora"];
        $horas_trabalhadas = $_POST["horas_trabalhadas"];
        
        if (is_numeric($salario_hora) && is_numeric($horas_trabalhadas)) {
            $salario_total = $salario_hora * $horas_trabalhadas;
            echo "<p>O seu salário no referido mês é: R$ $salario_total</p>";
        } else {
            echo "<p>Digite valores numéricos válidos para o salário por hora e para o número de horas trabalhadas.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="fahrenheit">Digite a temperatura em graus Fahrenheit:</label>
        <input type="text" id="fahrenheit" name="fahrenheit">
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fahrenheit = $_POST["fahrenheit"];
        
        if (is_numeric($fahrenheit)) {
            $celsius = 5 * (($fahrenheit - 32) / 9);
            echo "<p>A temperatura em graus Celsius é: $celsius °C</p>";
        } else {
            echo "<p>Por favor, digite um valor numérico válido para a temperatura em Fahrenheit.</p>";
        }
    }
    ?>

<form method="post" action="">
        <label for="peso">Digite o peso dos peixes (em kg):</label>
        <input type="text" id="peso" name="peso">
        <input type="submit" value="Calcular Excesso e Multa">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $limite = 50;
        $valor_multa_por_quilo = 4.00;

        if (is_numeric($peso)) {
            if ($peso > $limite) {
                $excesso = $peso - $limite;
                $multa = $excesso * $valor_multa_por_quilo;
            } else {
                $excesso = 0;
                $multa = 0;
            }

            echo "<p>Peso dos peixes: $peso kg</p>";
            echo "<p>Excesso de peso: $excesso kg</p>";
            echo "<p>Valor da multa: R$ $multa</p>";
        } else {
            echo "<p>Digite um valor numérico válido para o peso dos peixes.</p>";
        }
    }
    ?>''