<form method="post">
        <label for="nota">Digite uma nota:</label>
        <input type="text" id="nota" name="nota">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $nota = $_POST['nota'];

        if ($nota < 0 || $nota > 10) {
            echo "<p>Nota inválida. Por favor, digite uma nota entre 0 e 10.</p>";
        } else {
            echo "<p>Nota válida.</p>";
        }
   ?>

<form method="post">
        <label for="usuario">Digite seu nome de usuário:</label>
        <input type="text" id="usuario" name="usuario">
        <br><br>
        <label for="senha">Digite sua senha:</label>
        <input type="password" id="senha" name="senha">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario == $senha) {
            echo "<p>Senha inválida. Escolha uma senha diferente do seu nome de usuário.</p>";
        } else {
            echo "<p>Usuário e senha válidos.</p>";
        }
   ?>

<form method="post">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome">
        <br><br>
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" min="0" max="150">
        <br><br>
        <label for="salario">Digite seu salário:</label>
        <input type="number" id="salario" name="salario" min="0" step="any">
        <br><br>
        <label for="sexo">Digite seu sexo:</label>
        <input type="text" id="sexo" name="sexo" maxlength="1">
        <br><br>
        <label for="estado_civil">Digite seu estado civil:</label>
        <input type="text" id="estado_civil" name="estado_civil" maxlength="1">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $salario = $_POST['salario'];
        $sexo = $_POST['sexo'];
        $estado_civil = $_POST['estado_civil'];

        if (strlen($nome) < 3) {
            echo "Nome inválido. digite um nome com mais de 3 caracteres.";
        } elseif ($idade < 0 || $idade > 150) {
            echo "Idade inválida. digite uma idade entre 0 e 150.";
        } elseif ($salario <= 0) {
            echo "Salário inválido. digite um salário maior que zero.";
        } elseif (!in_array(strtolower($sexo), ['f', 'm'])) {
            echo "<p>Sexo inválido. digite 'f' ou 'm'.</p>";
        } elseif (!in_array(strtolower($estado_civil), ['s', 'c', 'v', 'd'])) {
            echo "Estado civil inválido. digite 's', 'c', 'v' ou 'd'.";
        } else {
            echo "Informações válidas.";
        }
  ?>

<form method="post">
        <label for="numero11">Digite um número:</label>
        <input type="number" id="numero11" name="numero11">
        <br><br>
        <label for="numero22">Digite segundo número:</label>
        <input type="number" id="numero22" name="numero22">
        <br><br>
        <label for="numero33">Digite terceiro número:</label>
        <input type="number" id="numero33" name="numero33">
        <br><br>
        <label for="numero44">Digite quarto número:</label>
        <input type="number" id="numero44" name="numero44">
        <br><br>
        <label for="numero55">Digite quinto número:</label>
        <input type="number" id="numero55" name="numero55">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $numeros2 = [$_POST['numero11'], $_POST['numero22'], $_POST['numero33'], $_POST['numero44'], $_POST['numero55']];

        $maior = $numeros[0];

        foreach ($numeros2 as $numero) {
            if ($numero > $maior) {
                $maior = $numero;
            }
        }

        echo "<p>O maior número é: ". $maior. "</p>";
   ?>

<form method="post">
        <label for="numero12">Digite um número:</label>
        <input type="number" id="numero12" name="numeros[]" required>
        <br><br>
        <label for="numero23">Digite segundo número:</label>
        <input type="number" id="numero23" name="numeros[]" required>
        <br><br>
        <label for="numero34">Digite terceiro número:</label>
        <input type="number" id="numero34" name="numeros[]" required>
        <br><br>
        <label for="numero45">Digite quarto número:</label>
        <input type="number" id="numero45" name="numeros[]" required>
        <br><br>
        <label for="numero56">Digite quinto número:</label>
        <input type="number" id="numero56" name="numeros[]" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $numeros1 = $_POST['numeros'];

        echo "<p>Os números digitados são:</p>";
        echo "<ul>";

        foreach ($numeros1 as $numero) {
            echo "<li>". $numero. "</li>";
        }

        echo "</ul>";
  ?>

<form method="post">
        <label for="numero1">Digite um número:</label>
        <input type="number" id="numero1" name="numeros[]" step="any" >
        <br><br>
        <label for="numero2">Digite segundo número:</label>
        <input type="number" id="numero2" name="numeros[]" step="any" >
        <br><br>
        <label for="numero3">Digite terceiro número:</label>
        <input type="number" id="numero3" name="numeros[]" step="any" >
        <br><br>
        <label for="numero4">Digite quarto número:</label>
        <input type="number" id="numero4" name="numeros[]" step="any" >
        <br><br>
        <label for="numero5">Digite quinto número:</label>
        <input type="number" id="numero5" name="numeros[]" step="any" >
        <br><br>
        <label for="numero6">Digite sexto número:</label>
        <input type="number" id="numero6" name="numeros[]" step="any" >
        <br><br>
        <label for="numero7">Digite setimo número:</label>
        <input type="number" id="numero7" name="numeros[]" step="any" >
        <br><br>
        <label for="numero8">Digite oitavo número:</label>
        <input type="number" id="numero8" name="numeros[]" step="any" >
        <br><br>
        <label for="numero9">Digite nono número:</label>
        <input type="number" id="numero9" name="numeros[]" step="any" >
        <br><br>
        <label for="numero10">Digite decimo número:</label>
        <input type="number" id="numero10" name="numeros[]" step="any" >
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $numeros = $_POST['numeros'];

        echo "<p>Os números digitados na ordem inversa são:</p>";
        echo "<ul>";

        for ($i = count($numeros) - 1; $i >= 0; $i--) {
            echo "<li>". $numeros[$i]. "</li>";
        }

        echo "</ul>";
 ?>