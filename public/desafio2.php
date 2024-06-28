<form method="post">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>
        <br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if ($numero1 > $numero2) {
            echo "<p>O maior número é: $numero1</p>";
        } elseif ($numero2 > $numero1) {
            echo "<p>O maior número é: $numero2</p>";
        } else {
            echo "<p>Os dois números são iguais.</p>";
        }
    }
    ?>
<form method="post">
        <label for="numero2">Digite Um número:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
<?php 
$num = $_POST['numero2'];

if ($num > 0) {
    echo "<p>O número é positivo.</p>";
    } else{
        echo "<p>O número é negativo.</p>";
        }
?>

<form method="post">
    <label for="sexo">Digite uma letra (F ou M):</label>
    <input type="text" id="sexo" name="sexo" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>

<?php
    $sexo = $_POST['sexo'];

    if (strtolower($sexo) == 'f') {
        echo "<p>Feminino.</p>";
    } elseif (strtolower($sexo) == 'm'){
        echo "<p>Masculino</p>";
    } else {
        echo "<p>Opção inválida.</p>";
    }
?>

<form method="post">
    <label for="letra">Digite uma letra:</label>
    <input type="text" id="letra" name="letra" maxlength="1" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>

<?php
    $letra = $_POST['letra'];

    if (in_array(strtolower($letra), ['a', 'e', 'i', 'o', 'u'])) {
        echo "<p>A letra digitada é uma vogal.</p>";
    } else {
        echo "<p>A letra digitada é uma consoante.</p>";
    }
?>


