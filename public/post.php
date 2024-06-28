<?php require 'inicio.php'?>
    <h1> Meu Formulário</h1>
    <form method="post">
        <label for="campo_de_nome">Digite seu nome</label>
        <input name="nome_usuario" id="campo_de_nome" type="texte">
        <button type='submit'>Enviar</button>
    </form>
<?php require 'fim.php'?>

<?php 
$nome = $_POST['nome_usuario'];
if ($nome) {
    echo "<h2>Olá, $nome.</h2>";
}
?>