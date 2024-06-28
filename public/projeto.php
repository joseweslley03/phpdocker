<?php
    $servername = "172.19.0.5";
    $username = "senac";
    $password = "aluno";
    $dbname = "senac";

    $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
?>
    <form action="" method="POST">
        <label for="nome">Nome de Usuário:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <?php 
        if(isset($_POST['nome'])&& isset ($_POST['senha'])){
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $db->exec(
                "INSERT INTO usuarios (nome, senha) 
                VALUES ('$nome', '$senha')"
            );
        }
    ?>
